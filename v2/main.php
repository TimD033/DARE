<html>

<head>

    <link rel="apple-touch-icon" href="res/icon.png">
    <meta name="apple-mobile-web-app-title" content="DARE">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="user-scalable=no" />
    <link rel="apple-touch-startup-image" href="res/launch/1.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/2.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/3.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/4.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/5.jpg" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/6.jpg" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <link rel="apple-touch-startup-image" href="res/launch/7.jpg" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">

    <style>
        @font-face {
            font-family: 'neon';
            src: url('res/fonts/Neon.ttf');
        }

        *:not(input) {
            user-select: none;
            -webkit-touch-callout: none;
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


        #fyou {
            font-family: neon;
            float: left;
            margin-left: 4%;
            margin-top: 3%;
            color: white;
        }

        #popul {
            font-family: neon;
            float: left;
            margin-right: 15%;
            margin-left: 3%;
            margin-top: 3%;
            color: #969696;
        }

        .nav {
            width: 100%;
            left: 0;
            right: 0;
            font-size: 7vw;
        }



        .featured {
            width: 100%;
            left: 0;
            right: 0;
            height: fit-content;
            margin-top: 18%;
            display: flex;
            justify-content: center;
        }

        .f-content {
            border-radius: 50%;
            width: 16.5%;
            height: 16.5vw;
            float: left;
            border: 0.6vw solid #06FF99;
            margin: 0px 2%;
            display: flex;
            justify-content: center;
        }

        .f-content-more {
            border-radius: 50%;
            width: 16.5%;
            height: 16.5vw;
            float: left;
            margin: 0px 2%;
            border: 0.6vw solid #0BCBFF;
            background-color: #205d6f;
        }



        .container {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: fixed;
            width: 100%;
            height: 100%;
        }


        .f-text {
            color: #06FF99;
            font-family: neon;
            text-align: center;
            margin-top: 18%;
            font-size: 3vw;
            position: fixed;
        }


        .add-text {
            color: #ffffff;
            font-family: neon;
            text-align: center;
            margin-top: 30%;
            font-size: 3.5vw;
            position: fixed;
        }


        .f-text-more {
            font-family: neon;
            text-align: center;
            margin-top: 20%;
            font-size: 4vw;
            color: #0BCBFF;
        }

        .plus {
            width: 5.5%;
            height: 14vw;
            float: left;
            margin: 2% 2% 0px -7%;
            background-color: #205d6f;
            z-index: -1;
            border-radius: 0vw 4vw 4vw 0vw;
            color: #0bcbff;
            font-size: 12.5vw;
            display: flex;
            justify-content: center;
            padding: 0px 0px 0px 5%;
            font-family: neon;
            text-align: center;
        }

        .line-green {
            width: 91%;
            height: 0.7vw;
            background-color: #06ff99;
            left: 0;
            right: 0;
            margin: auto;
            margin-top: 8%;
            border-radius: 4vw;
        }

        .line-white {
            width: 91%;
            height: 0.7vw;
            background-color: #ffffff;
            left: 0;
            right: 0;
            margin: auto;
            margin-top: 2%;
            border-radius: 4vw;
        }

        .categories {
            width: 100%;
            left: 0;
            right: 0;
            height: fit-content;
            margin-top: 2%;
            display: flex;
            justify-content: center;
        }


        .cats {
            width: 27.7%;
            float: left;
            border-radius: 2vw;
            margin: 0px 2%;
            background-color: #292929;
            color: white;
            font-family: neon;
            font-size: 4.0vw;
            text-align: center;
            padding: 1vw 0px;
        }


        .add {
            width: 100%;
            left: 0;
            right: 0;
            height: fit-content;
            margin-top: 10%;
            display: flex;
            justify-content: center;
        }

        .adds {
            width: 27.7%;
            height: 27.7vw;
            float: left;
            border-radius: 2vw;
            margin: 0px 2%;
            background-color: #292929;
            color: white;
            font-family: neon;
            font-size: 4.0vw;
            text-align: center;
            padding: 1vw 0px;
            display: flex;
            justify-content: center;
        }


        .green {
            background-color: #06ff99;
            -webkit-box-shadow: inset -1.2vw -1vw 0px 0.4vw #04bf73;
            -moz-box-shadow: inset -1.2vw -1vw 0px 0.4vw #04bf73;
            box-shadow: inset -1.2vw -1vw 0px 0.4vw #04bf73;
        }

        .blue {
            background-color: #0bcbff;
            -webkit-box-shadow: inset -1.2vw -1vw 0px 0.4vw #0898bf;
            -moz-box-shadow: inset -1.2vw -1vw 0px 0.4vw #0898bf;
            box-shadow: inset -1.2vw -1vw 0px 0.4vw #0898bf;

        }

        .adds>img {
            width: 60%;
            margin: auto;
        }

        .navbar {
            width: 100%;
            left: 0;
            right: 0;
            height: fit-content;
            bottom: 4%;
            position: fixed;
            display: flex;
            justify-content: center;
        }

        .bar {
            top: 0;
            bottom: 0;
            width: 15%;
            height: 7.5vw;
            margin: auto 2%;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .home {
            background-image: url(res/nav/homeb.png);
        }

        .search {
            background-image: url(res/nav/searchb.png);
        }

        .middle {
            background-image: url(res/nav/middle.png);
            height: 12.5vw !important;
        }

        .message {
            background-image: url(res/nav/messageb.png);
        }

        .profile {
            background-image: url(res/nav/profileb.png);
        }


        .home-s {
            background-image: url(res/nav/homeg.png);
        }

        .search-s {
            background-image: url(res/nav/searchg.png);
        }


        .message-s {
            background-image: url(res/nav/messageg.png);
        }

        .profile-s {
            background-image: url(res/nav/profileg.png);
        }

        .new {
            font-family: neon;
            text-align: center;
            margin-top: 13%;
            font-size: 4vw;
            position: fixed;
            color: white;
            width: 11.4%;
            background-color: orange;
            border-radius: 1.7vw;
        }

        .nav>.notify {
            width: 1.5%;
            height: 1.5vw;
            background-color: orange;
            border-radius: 50%;
            margin-top: 4vw;
            font-family: neon;
            margin-left: 1%;
            float: left;
            color: white;
            visibility: visible;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="bg"></div>

    <div class="container">
        <div class="nav">
            <div id="fyou">For you</div>
            <div class="notify"></div>
            <div id="popul">Popular</div>
        </div>
        <div class="featured">
            <div class="f-content">
                <div class="new">new</div>
                <div class="f-text">Placeholder</div>
            </div>
            <div class="f-content">
                <div class="new">new</div>
                <div class="f-text">Placeholder</div>
            </div>
            <div class="f-content">
                <div class="new">new</div>
                <div class="f-text">Placeholder</div>
            </div>
            <div class="f-content-more">
                <div class="f-text-more">+5<br>more</div>
            </div>
            <div class="plus">></div>
        </div>
        <div class="line-green"></div>
        <div class="categories">
            <div class="cats">Placeholder</div>
            <div class="cats">Placeholder</div>
            <div class="cats">Placeholder</div>
        </div>
        <div class="line-white"></div>
        <div class="add">
            <div class="adds blue"><img src="res/upload.png">
                <div class="add-text">Placeholder</div>
            </div>
            <div class="adds green"><img src="res/chellange.png">
                <div class="add-text">Placeholder</div>
            </div>
            <div class="adds blue"><img src="res/reward.png">
                <div class="add-text">Placeholder</div>
            </div>
        </div>
        <div class="navbar">
            <div class="bar home-s"></div>
            <div class="bar search"></div>
            <div class="bar middle"></div>
            <div class="bar message"></div>
            <div class="bar profile"></div>
        </div>
    </div>


    <script>
        $.get("scripts/backend.php", function(data) {
            $(".result").html(data);
        });
        
        function home() {
            var container = document.createElement("div");
            
            var nav = document.createElement("div");
            var featured = document.createElement("div");
            var greenline = document.createElement("div");
            var categories = document.createElement("div");
            var whiteline = document.createElement("div");
            var add = document.createElement("div");
            var navbar = document.createElement("div");
            
            
            var fyou = document.createElement("div");
            var notify = document.createElement("div");
            var popul = document.createElement("div");
            
            
            
            var fcontent1 = document.createElement("div");
            var fcontent2 = document.createElement("div");
            var fcontent3 = document.createElement("div");
            var fcontentmore = document.createElement("div");
            
            
            var cats1 = document.createElement("div");
            var cats2 = document.createElement("div");
            var cats3 = document.createElement("div");
            
            
            
            
            
        }
    </script>
</body>


</html>