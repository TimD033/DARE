<html manifest="manifest.manifest">

<head>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no" />
   
    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="https://via.placeholder.com/2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    


    <style>

            #myVideo {
                position: fixed;
                top: 0;
                bottom: -5px;
                min-width: 100%;
                min-height: 100%;
                margin: auto;
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
        
  
    </style>
</head>

<body>



    <div class="video">
        <video id="myVideo" autoplay loop muted playsinline>
            <source src="vid/vidd.mp4" type="video/mp4">
        </video>
    </div>
    <div class="bg"></div>
    <div class="gradient"></div>

    <div class="content">



    </div>



</body>

</html>