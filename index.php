<html manifest="manifest.manifest">

<head>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="user-scalable=no" />
    


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
            <source src="https://r4---sn-5hnekn7l.googlevideo.com/videoplayback?ipbits=0&signature=4FCDEF4A6F9F68DE6B6499175C5C05FA815CCB58.0E55995F32799A7718571B763263C5965A660CC9&dur=877.960&mime=video%2Fmp4&itag=136&source=youtube&mm=31%2C29&mn=sn-5hnekn7l%2Csn-5hne6ns6&requiressl=yes&ip=145.120.196.136&keepalive=yes&gir=yes&fvip=4&mt=1542371296&mv=m&pl=17&id=o-AMMTKVlY47ToqpPnv6Ed1lO2x77DyMvKhTopgHcMteA4&ei=LbjuW_WDF9WH8gOP87SgBw&ms=au%2Crdu&txp=5532332&c=WEB&key=yt6&initcwndbps=1798750&aitags=133%2C134%2C135%2C136%2C137%2C160%2C242%2C243%2C244%2C247%2C248%2C271%2C278%2C313&lmt=1536891389363057&clen=247837353&expire=1542392973&sparams=aitags%2Cclen%2Cdur%2Cei%2Cgir%2Cid%2Cinitcwndbps%2Cip%2Cipbits%2Citag%2Ckeepalive%2Clmt%2Cmime%2Cmm%2Cmn%2Cms%2Cmv%2Cpl%2Crequiressl%2Csource%2Cexpire&ratebypass=yes" type="video/mp4">
        </video>
    </div>
    <div class="bg"></div>
    <div class="gradient"></div>

    <div class="content">



    </div>



</body>

</html>