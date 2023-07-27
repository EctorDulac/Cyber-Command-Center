<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Cyber command center 8.1</title>
        <link rel="shortcut icon" href="./img/favicon.ico" />
        <link rel="stylesheet" href="./css/ui.css" />
        <script src="./js/jquery-1.12.4.js"></script>
        <script src="./js/jquery-ui.js"></script>
        <script src="./js/modernizr.min.js"></script>
        <script src="./js/jquery.ui.touch-punch.min.js"></script>
    </head>
    <body>
        <noscript>
            <p><em>This page requires JavaScript.</em></p>
        </noscript>

        <div id="boot" class="modal">
            <button class="command_button boot-button close-button" id="boot-button">
                <img src="img/mac.png" />
                <br />
                Boot
            </button>
        </div>

        <div id="sadmac" class="modal hidden">
            <img src="img/sadmac.png" />
        </div>
        <nav>
            <div class="nav-wrapper">
                <ul class="nav-list">
                    <li id="apple-logo">
                        <img src="img/apple.png" />
                        <ul class="menu command_button">
                            <li id="menu-about"><img src="img/mac.png" width="16" alt="About" />About</li>
                        </ul>
                    </li>
                    <li>
                        File
                        <ul class="menu command_button">
                            <li id="menu-login">
                                <img src="img/controls.png" width="16"/>
                                Login
                            </li>
                            <li id="menu-logout">
                                <img src="img/controls.png" width="16"/>
                                Logout
                            </li>
                            <hr />
                            <li id="menu-userslist">
                                <img src="img/news.png" width="16"/>
                                Users list
                            </li>
                            <hr />
                            <li id="menu-admin">
                                <img src="img/web.png" width="16"/>
                               Admin
                            </li>
                        </ul>
                    </li>
                    <li>
                        Edit
                        <ul class="menu command_button">
                            <li class="disabled noimg">Copy</li>
                            <li class="disabled noimg">Paste</li>
                        </ul>
                    </li>
                    <li>
                        Help
                        <ul class="menu command_button">
                            <li class="disabled"><img src="img/about.png" width="16" alt="About" />There is no help</li>
                        </ul>
                    </li>
                    <li id="macoslogo" class="nav-list">
                        <img src="img/macos.svg" alt="MacOS" />
                        <ul id="app-menu" class="menu">
                        </ul>
                    </li>
                  
                    <li id="time" class="time text-center timeText">
                        Loading...
                    </li>
                    <li id="user_logged" class="">
                        Anonymous
                    </li>
                </ul>
            </div>
        </nav>

        <div id="icon-holder" title="Desktop">
            <div class="icon draggable-icon ui-widget-content" id="icon-about">
                <img src="img/about.png" alt="About" />
                <h2>About</h2>
            </div>
        </div>
        <div id="icon-holder" title="Desktop">
            <div class="icon draggable-icon ui-widget-content" id="icon-sadmac">
                <img src="img/tv.png" alt="About" />
                <h2>System</h2>
            </div>
        </div>


        <div id="about" class="content resizable draggable-window hidden" data-window-icon="img/about.png" data-window-name="About">
            <div class="control-box close-box">
                <a class="control-box-inner"></a>
            </div>
            <div class="control-box zoom-box">
                <div class="control-box-inner">
                    <div class="zoom-box-inner"></div>
                </div>
            </div>
            <div class="control-box window-collapse">
                <div class="control-box-inner">
                    <div class="window-collapse-inner"></div>
                </div>
            </div>
            <h1 class="titlebar"><span>About</span></h1>
            <div class="inner">
                <div class="icon">
                    <img src="img/about.png" alt="Macintosh Computer" />
                </div>
                <ul>
                    <li style="text-align: left;">
                        <h1>Cyber Center</h1>
                        <p>
                            A cyber command centre based to conquer the world based on artificial intelligence, blockchain and astrology.
                        </p>
                       
                        <hr />
                        <p><b>Cyber Center</b>
                        <p>
                            MITMIT License <br />
                            Copyright (c) 2056 Ector DuLac
                            <br />
                            <br />
                            Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without
                            limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following
                            conditions:
                        </p>
                        <p>
                            The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
                            <br />
                            <br />
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO
                            EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR
                            THE USE OR OTHER DEALINGS IN THE SOFTWARE.
                        </p>
                        <p></p>
                    </li>
                </ul>
                <button class="command_button boot-button">Close</button>
            </div>
        </div>


        <div id="userslist" class="content resizable draggable-window hidden" style="width: 30%; left: 30%; top: 30%;" data-window-icon="img/news.png" data-window-name="Users list">
            <div class="control-box close-box">
                <a class="control-box-inner"></a>
            </div>
            <div class="control-box zoom-box">
                <div class="control-box-inner">
                    <div class="zoom-box-inner"></div>
                </div>
            </div>
            <div class="control-box window-collapse">
                <div class="control-box-inner">
                    <div class="window-collapse-inner"></div>
                </div>
            </div>
            <h1 class="titlebar"><span>About</span></h1>
            <div class="inner">
                <div class="icon">
                    <img src="img/news.png" />
                </div>
                <ul>
                    <li style="text-align: left;">
                        <h1>Users list</h1>
                        <ul id="userslist_container">
                        </ul>
                    </li>
                </ul>
                <div class="text-center">
                    <button class="command_button boot-button">Close</button>
                </div>
          

            </div>
        </div>


        <div id="login" class="content noscroll draggable-window text-center hidden" style="width: 250px; left: 20%; top: 20%;" data-window-icon="img/controls.png" data-window-name="Login">
            <div class="control-box close-box">
                <a class="control-box-inner"></a>
            </div>
            <h1 class="titlebar noright"><span>Controls</span></h1>
            <div class="inner">
                <div id="controls-inner">
                  
                   
                    <div class="m-sm">
                        <div>Username: </div>
                        <input type="text" id="login_username" autocomplete="off">
                    </div>
                    <div class="m-sm">
                        <div>Password: </div>
                        <input type="password" id="login_password" autocomplete="off">
                    </div>
                    <button id="login_button" class="command_button">Login</button>
                    <div class="m-sm">
                        <label id="login_message">&nbsp;</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="errorWindow" class="alert alert-stop content noscroll text-center hidden" style="width: 20%;">
            <div class="inner">
                <p style="font-weight: normal;">Insufficient rights</p>
                <br />
                <p>
                    You must be logged in as an administrator to access this page.
                </p>
                <button class="command_button right-button close-button">
                    OK
                </button>
            </div>
        </div>

        <div id="audio-holder">
            <audio id="sound_boot" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/boot.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_close" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_close.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_collapse" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_collapse.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_expand" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_expand.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_open" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_open.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_stopmoving" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_stopmoving.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
            <audio id="sound_window_moving" class="handsoff hidden" preload="auto">
                <source src="rsrc/ui/window_moving.mp3" type="audio/mpeg" />
                Your browser does not support the HTML audio element.
            </audio>
        </div>

        <script src="js/ui.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>

