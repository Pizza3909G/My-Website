<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Teko:400,700' rel='stylesheet' type='text/css'>
        <title>Pizza3909G</title>
        <style type="text/css">
            :root{
                --background: url("img/home.gif");
            }

            @font-face {
                font-family: Roboto;
                src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
            }

            .container {
                position: relative;
                min-height: 100%;
            }

            html, body{
                margin: 0;
                padding: 0;
                height: 100%;
            }

            html{
                margin: 0;
                padding: 0;
            }

            #video{
                position: fixed;
                background: var(--background);
                min-width: 100%;
                min-height: 100%;
                -webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -o-filter: blur(5px);
                -ms-filter: blur(5px);
                filter: blur(5px);
            }

            video{
                object-fit: cover;
                width: 100vw;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                filter: opacity(60%);
                z-index: -1;
            }

            div#header{
                height: 380px;
            }

            .header-part{
                height: 100%;
            }

            @media (min-width: 768px) {
                .header{
                    margin: 0 !important;
                }
            }

            .left {
                float: left;
                position: relative;
                bottom: -10px;
                text-align: left;
                -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
                box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
                border-radius: 5px;
                padding: 10px 10px 10px 10px;
                width: 250px;
                height: 60px;
                cursor: pointer;
                background: rgba(255, 255, 255, 0.02);
                transition: all 1s cubic-bezier(0.33, 0.74, 0.28, 0.82) !important;
                margin-top: 17.5ch;
                transform: translate(20%, 80%);
            }

            .left:hover {
                bottom: 2px;
                transition: all 1s cubic-bezier(0.33, 0.74, 0.28, 0.82) !important;
            }

            .right {
                float: right;
                position: relative;
                bottom: -10px;
                background: rgba(255, 255, 255, 0.02);
                -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
                box-shadow: 0 5px 8px rgba(0, 0, 0, 0.08);
                border-radius: 5px;
                padding: 10px 10px 10px 10px;
                width: 250px;
                height: 60px;
                text-align: right;
                cursor: pointer;
                transition: all 1s cubic-bezier(0.33, 0.74, 0.28, 0.82) !important;
                margin-top: 17.5ch;
                transform: translate(-20%, -252%);
            }

            .right:hover {
                bottom: 2px;
                transition: all 1s cubic-bezier(0.33, 0.74, 0.28, 0.82) !important;
            }

            .left .text{
                font-size: 14px !important;
                font-weight: normal;
                color: #fff;
                line-height: 18px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                font-family: Kanit, "Open Sans";
                text-transform: uppercase;
            }

            .right .text{
                font-size: 14px !important;
                font-weight: normal;
                color: #fff;
                line-height: 18px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                font-family: Kanit, "Open Sans";
                text-transform: uppercase;
            }

            .left a{
                font-size: 14px !important;
                font-weight: normal;
                line-height: 18px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                font-family: Kanit, "Open Sans";
                color: #ffdf00;
            }

            .right a{
                font-size: 14px !important;
                font-weight: normal;
                line-height: 18px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                font-family: Kanit, "Open Sans";
                color: #ffdf00;
            }

            .center{
                margin-left: -15px;
                margin-right: 15px;
            }

            .header img {
                vertical-align: bottom;
                max-width: 500px;
                max-height: 500px;
                margin-top: 30px;
                height: 250px;
                width: 260px;
            }

            .logo img{
                vertical-align: bottom;
                margin-top: 0;
                height: auto!important;
                width: 100px;
                align-items: center;
            }

            .logo {
                text-align-last: center;
                margin-right: auto;
                margin-left: auto;
            }

            .logo{
                width: 100px;
                border-radius: 100%;
                -webkit-animation-name: hvr-bob-float, hvr-bob;
                animation-name: hvr-bob-float, hvr-bob;
                -webkit-animation-duration: .3s, 1.5s;
                animation-duration: .3s, 1.5s;
                -webkit-animation-delay: 0s, .3s;
                animation-delay: 0s, .3s;
                -webkit-animation-timing-function: ease-out, ease-in-out;
                animation-timing-function: ease-out, ease-in-out;
                -webkit-animation-iteration-count: 1, infinite;
                animation-iteration-count: 1, infinite;
                -webkit-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
                -webkit-animation-direction: normal, alternate;
                animation-direction: normal, alternate;
                transform: translate(100%, 10%);
            }

            header .logo {
                margin-left: 40px;
            }

            @media screen and (max-width: 750px) {
                .header .logo {
                    margin-left: auto;
                }
            }
            .header-container {
                height: 290px;
            }

            .header-container .container {
                height: 290px;
            }

            element.style {}

            @media screen and (min-width: 900px){}
                div#cyvers-container {
                padding: 10px;
                border-radius: 4px;
                margin-top: -20px;
                width: 1140px;
                }
            }
        </style>
    </head>
    <body>
        <div class="backgound">
            <img id="video" src="img/home.gif" loading="lazy">
        </div>
        <div class="header" id="header">
            <div class="header-part">
                <div class="header-container">
                    <div class="container">
                        <div class="center">
                            <div class="left">
                                <div class="text">My Github's</div>
                                <a class="ipCopy">Click to view!</a>
                            </div>
                            <div class="pulse infinite animated">
                                <img id="logo" class="logo" src="img/logo.jpg" loading="lazy">
                            </div>
                            <div class="right">
                                <div class="text">Members Online: <span id="discord-online"></span></div>
                                <a class="ipCopy">Click our Discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="cyvers-container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse" style="height: 1px;">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social</a>
                                <i class="fa fa-caret-down"></i>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Discord bot</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
