<html manifest="manifest.manifest">


<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="apple-touch-icon" href="res/icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500" rel="stylesheet">

    <link rel="apple-touch-startup-image" href="res/launch/1.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/2.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/3.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/4.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/5.jpg" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/6.jpg" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/7.jpg" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">



    <style>
        * {
            -webkit-user-select: none;

        }

        body {
            background-color: #2a4644;
            position: fixed;

            transition: background-color 0.6s;




        }

        .bg {

            background-image: linear-gradient(#2a4644, #3c1630);
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }



        .bodytrans {
            background-color: #213635;

        }


        #logo {
            width: 735px;
            left: 0;
            right: 0;
            position: fixed;
            margin: auto;

            top: 100px;

        }

        @font-face {
            font-family: 'neon';
            src: url('res/fonts/Neon.ttf');
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fade-in {
            opacity: 0;
            /* make things invisible upon start */
            -webkit-animation: fadeIn ease-in 1;
            /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
            -moz-animation: fadeIn ease-in 1;
            animation: fadeIn ease-in 1;

            -webkit-animation-fill-mode: forwards;
            /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;

            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
        }

        .fade-in {
            -webkit-animation-delay: 0.7s;
            -moz-animation-delay: 0.7s;
            animation-delay: 0.7s;
        }


        #bliksum {
            left: 0;
            right: 0;
            position: fixed;
            margin: auto;
            top: 580px;
            width: 221px;
            -webkit-animation: popin 1s ease-in-out, glow 4s 2s infinite ease-in-out;
            -webkit-filter: drop-shadow(0px 0px 15px #6defb959);


        }


        @keyframes popin {
            0% {
                width: 0px;
            }

            40% {
                width: 250px;
            }

            60% {
                width: 200px;
            }

            100% {
                width: 220px;
            }
        }


        @keyframes glow {
            0% {
                -webkit-filter: drop-shadow(0px 0px 15px #6defb959);
            }

            50% {
                -webkit-filter: drop-shadow(0px 0px 15px #6defb9);
            }

            100% {
                -webkit-filter: drop-shadow(0px 0px 15px #6defb959);
            }
        }

        .login {
            width: 521px;
            background: #212120;
            left: 0;
            right: 0;
            position: fixed;
            margin: auto;
            bottom: 363px;
            border-radius: 35px;
            font-family: neon;
            color: #06ff99;
            font-size: 90px;
            text-align: center;
            padding: 17px 0px;
            text-shadow: 6px 9px #1d4031;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }


        .signup {
            width: 521px;
            background: #ffffff;
            left: 0;
            box-shadow: 13px 12px #989898;
            right: 0;
            position: fixed;
            margin: auto;
            bottom: 155px;
            border-radius: 35px;
            font-family: neon;
            color: #000000;
            font-size: 90px;
            text-align: center;
            padding: 17px 0px;
            text-shadow: 7px 5px #cecece;
        }



        .noselect {
            -webkit-touch-callout: none;
            /* iOS Safari */
            -webkit-user-select: none;
            /* Safari */
            -khtml-user-select: none;
            /* Konqueror HTML */
            -moz-user-select: none;
            /* Firefox */
            -ms-user-select: none;
            /* Internet Explorer/Edge */
            user-select: none;
            /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
        }


        .logindiv {
            -webkit-backdrop-filter: blur(40px);
            position: fixed;
            width: 82%;
            height: fit-content;
            background-color: rgba(208, 208, 208, 0.44);
            top: -8%;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 17px;
            z-index: 2;
        }


        .signdiv {
            -webkit-backdrop-filter: blur(40px);
            position: fixed;
            width: 82%;
            height: fit-content;
            background-color: rgba(208, 208, 208, 0.44);
            top: -8%;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            border-radius: 17px;
            z-index: 2;
        }


        #inputu {
            width: 87%;
            margin: auto;
            height: 156px;
            border: none;
            border-radius: 8px;
            background-color: rgba(167, 167, 167, 0.47);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            font-weight: 300;
            padding-left: 30px;
            border-bottom: #585858ad solid 12px;
            display: block;
            margin-top: 50px;
        }


        #inputp {
            width: 87%;
            margin: auto;
            height: 156px;
            border: none;
            border-radius: 8px;
            background-color: rgba(167, 167, 167, 0.47);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            font-weight: 300;
            padding-left: 30px;
            border-bottom: #585858ad solid 12px;
            display: block;
            margin-top: 50px;
        }

        #inputn {
            width: 87%;
            margin: auto;
            height: 156px;
            border: none;
            border-radius: 8px;
            background-color: rgba(167, 167, 167, 0.47);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            font-weight: 300;
            padding-left: 30px;
            border-bottom: #585858ad solid 12px;
            display: block;
            margin-top: 50px;
        }


        #inputmail {
            width: 87%;
            margin: auto;
            height: 156px;
            border: none;
            border-radius: 8px;
            background-color: rgba(167, 167, 167, 0.47);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            font-weight: 300;
            padding-left: 30px;
            border-bottom: #585858ad solid 12px;
            display: block;
            margin-top: 50px;
        }

        #inputmail {
            width: 87%;
            margin: auto;
            height: 156px;
            border: none;
            border-radius: 8px;
            background-color: rgba(167, 167, 167, 0.47);
            font-family: 'Roboto', sans-serif;
            font-size: 45px;
            font-weight: 300;
            padding-left: 30px;
            border-bottom: #585858ad solid 12px;
            display: block;
            margin-top: 50px;
        }


        #loginsubmit {
            width: 87%;
            margin: auto;
            height: 115px;
            margin-top: 30px;
            margin-bottom: 36px;
            border: none;
            border-radius: 11px;
            background-color: #4e4e4e36;
            font-size: 60px;
            font-family: 'Roboto', sans-serif;
            color: #252525;
            font-weight: 300;
            display: block;
            -webkit-backdrop-filter: blur(40px);
            -webkit-appearance: none;
        }


        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #363636;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #363636;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #363636;
        }


        .closelogin {
            width: 70px;
            height: 70px;
            background-color: rgba(69, 69, 69, 0.68);
            border-radius: 50%;
            margin-top: 15px;
            font-size: 59px;
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            text-align: center;
            display: flex;
            justify-content: center;
            color: #1d1d1d;
            top: 10px;
            position: absolute;
            right: 30px;
        }

        #logintext {
            font-size: 80px;
            font-family: 'Roboto', sans-serif;
            color: #4c4c4c;
            text-align: center;
            font-weight: 300;
            margin: auto;
            margin-top: 25px;
        }


        #signtext {
            font-size: 80px;
            font-family: 'Roboto', sans-serif;
            color: #4c4c4c;
            text-align: center;
            font-weight: 300;
            margin: auto;
            margin-top: 25px;
        }


        .darken {
            background-color: #00000036;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            margin: auto;
            z-index: 1;
            display: none;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body scroll="no" style="overflow: hidden">

    <div class="bg"></div>
    <img class="fade-in" id="logo" src="res/logo.png">
    <img id="bliksum" src="res/blaaiksum.png">
    <div onclick="login()" class="login fade-in noselect">LOG IN</div>
    <div onclick="signup()" class="signup fade-in noselect">SIGN UP</div>





</body>

<script>
    function signup() {
        if (!$('.logindiv').length > 0 && !$('#inputu').length > 0 && !$('#inputp').length > 0 && !$('#hello').length > 0 && !$('#form').length > 0) {

            var signdiv = document.createElement("div");
            var form = document.createElement("form");
            var darken = document.createElement("div");
            var inputu = document.createElement("input");
            var inputn = document.createElement("input");
            var inputp = document.createElement("input");
            var inputmail = document.createElement("input");
            var submit = document.createElement("input");
            var close = document.createElement("div");
            var text = document.createElement("p");

            text.id = "signtext";
            text.innerHTML = "Sign Up";

            close.onclick = function() {
                $(".darken").fadeOut(600);
                $(".signdiv").fadeOut(600);
                setTimeout(
                    function() {
                        $(".darken").remove();
                        $(".signdiv").remove();
                    }, 600);
            };

            inputu.type = 'text';
            inputn.type = 'text';
            inputmail.type = 'text';
            inputp.type = 'password';
            darken.className = 'darken';
            close.className = 'closelogin';
            inputu.placeholder = 'Username'
            inputn.placeholder = 'Full name'
            inputmail.placeholder = 'Email'
            inputp.placeholder = 'Password'

            inputu.id = 'inputu';
            inputp.id = 'inputp';
            inputn.id = 'inputn';
            inputu.name = 'username'
            inputp.name = 'password'
            inputn.name = 'name'
            inputmail.name = 'mail'
            form.action = 'register.php';
            form.method = 'post'
            submit.type = 'submit';
            submit.value = 'submit';
            inputmail.id = 'inputmail';
            close.innerHTML = 'X';
            form.id = 'form';
            signdiv.className = 'signdiv';
            signdiv.style.display = 'none';
            submit.id = 'loginsubmit';
            document.body.appendChild(darken);
            document.body.appendChild(signdiv);
            signdiv.appendChild(text);
            signdiv.appendChild(close);
            signdiv.appendChild(form);
            form.appendChild(inputn)
            form.appendChild(inputu)
            form.appendChild(inputp)
            form.appendChild(inputmail)
            form.appendChild(submit)

            $(".signdiv").fadeIn(600);
            $(".darken").fadeIn(600);
            $("body").click(function() {
                $(this).toggleClass('bodytrans');
            });
        }
    }



    function login() {
        if (!$('.logindiv').length > 0 && !$('#inputu').length > 0 && !$('#inputp').length > 0 && !$('#hello').length > 0 && !$('#form').length > 0) {

            var logindiv = document.createElement("div");
            var form = document.createElement("form");
            var darken = document.createElement("div");
            var inputu = document.createElement("input");
            var inputp = document.createElement("input");
            var submit = document.createElement("input");
            var close = document.createElement("div");
            var text = document.createElement("p");

            text.id = "logintext";
            text.innerHTML = "LOG IN";

            close.onclick = function() {
                $(".darken").fadeOut(600);
                $(".logindiv").fadeOut(600);
                setTimeout(
                    function() {
                        $(".darken").remove();
                        $(".logindiv").remove();
                    }, 600);
            };



            inputu.type = 'text';
            darken.className = 'darken';
            close.className = 'closelogin';
            inputu.placeholder = 'Username'
            inputp.placeholder = 'Password'
            inputp.type = 'password';
            inputu.id = 'inputu';
            inputp.id = 'inputp';
            inputu.name = 'username';
            inputp.name = 'password';
            submit.innerHTML = 'Log in';
            
            submit.type = 'submit';
            submit.value = 'submit';
            form.action = 'login.php';
            form.method = 'post'
            
            
            close.innerHTML = 'X';
            form.id = 'form';
            logindiv.className = 'logindiv';
            logindiv.style.display = 'none';
            submit.id = 'loginsubmit';
            document.body.appendChild(darken);
            document.body.appendChild(logindiv);
            logindiv.appendChild(text);
            logindiv.appendChild(close);
            logindiv.appendChild(form);
            form.appendChild(inputu)
            form.appendChild(inputp)
            form.appendChild(submit)

            $(".logindiv").fadeIn(600);
            $(".darken").fadeIn(600);
            $("body").click(function() {
                $(this).toggleClass('bodytrans');
            });
        }
    }
</script>

</html>