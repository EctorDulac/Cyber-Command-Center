<?php

include "./config.php";

if (isAjax())
{
	if (isset($_POST["action"]) && !empty($_POST["action"]))
	{
		$action = $_POST["action"];

		switch($action)
		{
            case "test": test(); break;
            case "get_users": get_users(); break;
            case "login": login(); break;
            case "logout": logout(); break;
            case "get_logged_user": get_logged_user(); break;
		    case "get_current_ip_address": get_current_ip_address(); break;
		    default : sendError();
		}
	}
}


function test()
{
	$output["test"] = "ok";
	echo json_encode($output);
}


function get_users()
{
    global $connector;

    // Check db connexion
    if(!$connector)
    {
        echo "Could not connect to database";
	    return http_response_code(400);
    }

    // Get all users
    $query = 'SELECT username, role FROM cyber_users';
    $results = mysqli_query($connector, $query) or die('Erreur SQL !<br><br>'.mysqli_error($connector)); 	
    $output = array();

    while($data = mysqli_fetch_assoc($results))
    {
        array_push($output, array('username' => $data['username'], 'role' => $data['role']));
    }

    echo json_encode(array('users' => $output));
}


function login()
{
    global $connector;

    // Check db connexion
    if(!$connector)
    {
        echo "Could not connect to database";
	    return http_response_code(400);
    }

    // Anti cyberbruteforce check
	$ip = get_current_ip_address();
	$query = 'SELECT ip FROM cyber_ip_blocked WHERE ip ="' . $ip . '"';

	$db_results = mysqli_query($connector, $query) or die('SQL error with query: ' . $query . '<br><br>');

    $results = "";

	if (mysqli_num_rows($db_results)>0)
	{
        while($obj = mysqli_fetch_assoc($db_results)) 
        {
            $results = implode(', ', $obj) .  $results;
        }
       
		$error_message = "Cyber bruteforce protection: your ip " . $results . " have been blocked. <br><br>";
		
		echo $error_message;
		return http_response_code(400);
	}


    if(!empty($_POST['username']) || !empty($_POST['password']))
    {
        $username = $connector->real_escape_string($_POST['username']);
        $password = $_POST['password'];
        
        if($username=='' || $password=='')
        {
            echo json_encode(array('status' => 0, 'message' => 'Username or Password cannot be empty'));
            return;
        }
    
        $hash = sha1($password);
        
        // Wait some time...
        sleep(1);
    
        $query = 'SELECT id, username, is_admin FROM cyber_users WHERE username ="' . $username . '" AND hash="' . $hash . '"';

        $results = mysqli_query($connector, $query) or die('SQL error with query: ' . $query . '<br><br>');

        if (mysqli_num_rows($results)>0)
        {
            $result = mysqli_fetch_assoc($results);

            session_start();
            $_SESSION['is_admin'] = $result['is_admin'];
            $_SESSION['username'] = $result['username'];
            echo json_encode(array('status' => 1));
           
        }
        else
        {
            echo json_encode(array('status' => 0, 'message' => 'Invalid username or password'));
        }
    }
    else
    {
        echo json_encode(array('status' => 0, 'message' => 'Username or Password cannot be empty'));
    }
}


function logout()
{
    $_SESSION['is_admin'] = null;
    $_SESSION['username'] = null;

    session_start();
    session_destroy();
    echo json_encode(array('status' => 1));
}


function get_logged_user()
{
    session_start();

    if(isset($_SESSION["username"]))
    {
        echo json_encode(array('username' => $_SESSION["username"], 'is_admin' => $_SESSION["is_admin"]));
    }
    else
    {
        echo json_encode(array('username' => 'anonymous', 'is_admin' => 0));
    }
}


function get_current_ip_address()
{
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	{
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	else if (!empty($_SERVER['REMOTE_ADDR']))
	{
		return $_SERVER['REMOTE_ADDR'];
	}
	else
	{
		return '127.0.0.1';
	}
}

function isAjax()
{
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


function sendError()
{
	echo "Unknown cyberfunction";
	http_response_code(400);
}
?>

