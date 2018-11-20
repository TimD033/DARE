<html manifest="manifest.manifest">

<head>

    <link rel="apple-touch-icon" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
   
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
    position: absolute;
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
    position: absolute;
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
    position: absolute;
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
    position: absolute;
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

        








    </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://unpkg.com/popmotion/dist/popmotion.global.min.js"></script>
    </head>

<body>



    <div class="video">
        <video id="myVideo" autoplay loop muted playsinline>
            <source src="vid/vidd.mp4" type="video/mp4">
        </video>
    </div>
    <div class="bg"></div>
    <div class="gradient"></div>

        
<img id="sign" src="signup.png">
    <img onclick="login()" id="login" src="login.png">
    <img id="logo" src="logo1.png">
    
    

<p id="footer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
     



    <script>
    
    
    </script>
</body>

</html>