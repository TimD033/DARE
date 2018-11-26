<html manifest="manifest.manifest">
<?php include 'login.php'; include 'signUp.php'?>
<head>

    <link rel="apple-touch-icon" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500" rel="stylesheet">
   
    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    


    <style>

        
        
        body {
            background-color: black;
        }
        
        body,
html {
  position: fixed;
}
        
            #myVideo {
    position: fixed;
    top: 0;
    bottom: -5px;
    min-width: 100%;
    min-height: 100%;
    margin: auto;
    opacity: .9;
    filter: saturate(1.6);
}
        
            .video {
                position: absolute;
                height: 100%;
                right: 0;
                bottom: 0;
                left: 0;
                bottom: 0;
                margin: auto;
                display: flex;
                justify-content: center;
                
                
                
                position: fixed;


 
 transform: scale(1.1); 
                
                
                
            }
        
            .bg {
                position: fixed;
                height: 100%;
                right: 0;
                bottom: 0;
                left: 0;
                bottom: 0;
                margin: auto;
                background-image: url(bg.png);
                opacity: 0.2;
            }
        
            .signup {
                width: 80%;
                height: 200px;
                background-color: white;
            }
        
            .gradient {
                position: fixed;
                width: 100%;
                height: 280px;
                left: 0;
                right: 0;
                top: 0;
                background-image: -webkit-linear-gradient(top, rgb(0, 0, 0) 7%, rgba(0, 0, 0, 0) 95%);
            }
        

        
#sign {
    position: fixed;
    left: 0;
    right: 0;
    margin: auto;
    bottom: 364px;
    width: 550px;
    -webkit-animation: sign 2s infinite;
}
        
        
        @-webkit-keyframes sign {
  from {
    box-shadow: #ffac92 1px 1px 73px;
  }
  50% {
    box-shadow: #ffac92 1px 1px 120px;
  }
            
            to {
    box-shadow: #ffac92 1px 1px 73px;
  }
}
        
#login {
    position: fixed;
    left: 0;
    right: 0;
    margin: auto;
    bottom: 603px;
    width: 550px;
    -webkit-animation: login 2s infinite;
}
        
        
                @-webkit-keyframes login {
  from {
        box-shadow: #51ccf3 1px 1px 73px;
  }
  50% {
    box-shadow: #51ccf3 1px 1px 120px;
  }
            
            to {
    box-shadow: #51ccf3 1px 1px 73px;
  }
}
        
    #logo {
    position: fixed;
    left: 0;
    right: 0;
    margin: auto;
    top: 40px;
    width: 100%;
}
    

        *, *:after, *:before {
  -moz-box-sizing:border-box; 
   box-sizing:border-box;
}

body, html {
  position: relative; 
  height: 100%; 
  width: 100%; 
  overflow: hidden;
}

body { 
  background-color: #fff; 
  margin: 0; 
}

        #footer {
    position: fixed;
    color: #fff6b3;
    bottom: 29px;
    text-align: center;
    margin: auto;
    left: 0;
    right: 0;
    font-size: 24px;
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
            width: 80%;
}
        
        
        
        .logindiv {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #fffdfd36;
                backdrop-filter: blur(20px);
        }
        .signDiv{
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #fffdfd36;
            backdrop-filter: blur(20px);
        }
.logindiv input {
    height: 110px;
    width: 655px;
    border: none;
    background-color: rgba(0, 0, 0, 0.27);
    border-radius: 6px;
    font-family: 'Roboto', sans-serif;
    box-shadow: #00000030 1px 1px 20px;
    font-weight: 100;
    font-size: 60px;
    padding: 0px 26px;
    left: 0;
    display: block;
    right: 0;
    margin: 24px auto;
}

        input[type="submit"] {
         margin-top 50px!important; 
            
        }
        
        
        form {
            
                margin-top: 851px;
            
        }
        
        
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #e0e0e0;
    opacity: 1; /* Firefox */
            font-family: 'Roboto', sans-serif;
    font-weight: 100;
}




        .logindiv input[type=submit] {
    background-color: #67676763;
    margin-top: 50px;
    color: #c7c7c7;
}
        .signDiv input [type=submit] {
            background-color: #67676763;
            margin-top: 50px;
            color: #c7c7c7;
        }

        .signDiv input {
            height: 110px;
            width: 655px;
            border: none;
            background-color: rgba(0, 0, 0, 0.27);
            border-radius: 6px;
            font-family: 'Roboto', sans-serif;
            box-shadow: #00000030 1px 1px 20px;
            font-weight: 100;
            font-size: 60px;
            padding: 0px 26px;
            left: 0;
            display: block;
            right: 0;
            margin: 24px auto;
        }

        .signDiv form{
            margin-top: 65%;
        }



        








    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
    <script>
        function login() {
            var login = document.createElement("div");
            var logintitle = document.createElement("p");
            var slogan = document.createElement("p");
            var form = document.createElement("form");
            var username = document.createElement("input");
            var passwd = document.createElement("input");
            var submit = document.createElement("input");


            $("#logo").fadeOut();
            $("#sign").fadeOut();
            $("#login").fadeOut();
            $(".gradient").fadeOut();
            
            $("#logo").fadeOut();
            $(".bg").fadeOut();
            
            document.getElementById("myVideo").style.filter = "blur(20px)";
            



            login.className = "logindiv";
            logintitle.className = "logintitle";
            slogan.className = "slogan";
            form.action = "login.php";
            form.method = "post";
            username.type = "text";
            passwd.type = "password";
            submit.type = "submit";
            username.name = "username";
            passwd.name = "passwd";
            username.placeholder = "Username";
            passwd.placeholder = "Password";
            submit.value = "Send";
            login.style = "display:none";



            document.body.appendChild(login);
            login.appendChild(logintitle);
            login.appendChild(slogan);
            login.appendChild(form);
            form.appendChild(username);
            form.appendChild(passwd);
            form.appendChild(submit);
            
            $(".logindiv").fadeIn();

        }

        function signUp() {
            var sign = document.createElement("div");
            var signtitle = document.createElement("p");
            var slogan = document.createElement("p");
            var form = document.createElement("form");
            var usernm = document.createElement("input");
            var password = document.createElement("input");
            var password2 = document.createElement("input");
            var email = document.createElement("input");
            var submit = document.createElement("input");

            $("#logo").fadeOut();
            $("#sign").fadeOut();
            $("#login").fadeOut();
            $(".gradient").fadeOut();

            $("#logo").fadeOut();
            $(".bg").fadeOut();

            document.getElementById("myVideo").style.filter = "blur(20px)";

            sign.className = "signDiv";
            signtitle.className = "signtitle";
            slogan.className = "slogan";
            form.action = "signUp.php";
            form.method = "post";
            usernm.type = "text";
            password.type = "password";
            password2.type = "password";
            email.type = "text";
            submit.type = "submit";
            usernm.name = "usernm";
            password.name = "password";
            password2.name = "password2";
            email.name = "email";
            usernm.placeholder = "Username";
            password.placeholder = "Password";
            password2.placeholder = "Password again";
            email.placeholder = "Email";
            submit.value = "Send";
            sign.style = "display:none";


            document.body.appendChild(sign);
            sign.appendChild(signtitle);
            sign.appendChild(slogan);
            sign.appendChild(form);
            form.appendChild(usernm);
            form.appendChild(password);
            form.appendChild(password2);
            form.appendChild(email);
            form.appendChild(submit);

            $(".signDiv").fadeIn();

        }
        
        
        
        
    </script>
    </head>

<body scroll="no" style="overflow: hidden">



    <div class="video">
        <video id="myVideo" autoplay loop muted playsinline>
            <source src="vid/vidd.mp4" type="video/mp4">
        </video>
    </div>
    <div class="bg"></div>
    <div class="gradient"></div>

        
<img onclick="signUp()" id="sign" src="signup.png">
    <img onclick="login()" id="login" src="login.png">
    <img id="logo" src="logo1.png">
    
    

<p id="footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
     




</body>

</html>