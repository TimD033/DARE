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

    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400i" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'neon';
            src: url('res/fonts/Neon.ttf');
        }

        *:not(input) {
            user-select: none;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        body {
    background-color: #2a4644;
    transition: background-color 0.2s ease-in-out;
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
    z-index: -1;
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
z-index: 1;
}



        .container {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    width: 100%;
    height: 100%;
}


.searchform {
    width: 100%;
    display: flex;
    justify-content: center;
    height: fit-content;
    margin-top: 8vw;
    border: none;
    position: fixed;
}


        .searchinput {
            width: 86%;
            left: 0;
            right: 0;
            height: 12vw;
            border-radius: 19vw;
            display: flex;
            justify-content: center;
            font-size: 6vw;
            padding: 0vw 6vw;
            font-family: 'Roboto', sans-serif;
            font-style: italic;
            font-weight: 300;
            border: none;
        }
        

.results {
    margin-top: 63vw;
    height: calc(100% - 86.5vw);
    overflow: auto;
    position: fixed;
    z-index: -1;
    width: 100%;
    -webkit-overflow-scrolling: touch;
}
        
.hide-top {
width: 100%;
height: 10vw;
margin-top: 59vw;
position: fixed;
z-index: 0;
background-image: linear-gradient(#32383e 42.02%, #32383e00);
}
        
.hide-bottom {
width: 100%;
height: 38vw;
bottom: 23vw;
z-index: 0;
position: fixed;
background-image: linear-gradient(#40193400, #3f1833);
}

        .amount {
    width: 100%;
    height: 16vw;
    margin-top: 49vw;
    position: fixed;
}

        .result-amount {
            color: #06ff99;
            font-family: neon;
            margin-left: 7vw;
            font-size: 4.5vw;
        }




        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #a2a2a2;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #a2a2a2;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #a2a2a2;
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
z-index: 0;
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

        .bodytrans {
            background-color: #000000;

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
            -webkit-transition: background-image 0.2s ease-in-out;
            transition: background-image 0.2s ease-in-out;
        }

        .search {
            -webkit-transition: background-image 0.2s ease-in-out;
            transition: background-image 0.2s ease-in-out;
        }

        .middle {
            background-image: url(res/nav/middle.png);
            height: 12.5vw !important;
        }

        .message {
            -webkit-transition: background-image 0.2s ease-in-out;
            transition: background-image 0.2s ease-in-out;
        }

        .profile {
            -webkit-transition: background-image 0.2s ease-in-out;
            transition: background-image 0.2s ease-in-out;
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

        .filter {
    width: 100%;
    height: 20vw;
    color: white;
    font-family: neon;
    display: flex;
    justify-content: center;
    font-size: 7vw;
    margin-top: 28vw;
    position: fixed;
}
        


        .gradient {
    background-image: linear-gradient(#000000 37%, #00000000 99%);
    height: 57vw;
    position: fixed;
    width: 100%;
    z-index: -1;
}

        .users {
            float: left;
            margin: 0px 6vw;
        }

        .challenges {
            float: left;
            margin: 0px 6vw;
        }

        .selector {
            width: 20%;
            position: fixed;
            height: 1.5vw;
            margin-top: 9.5vw;
            background-color: white;
            border-radius: 10vw;
            left: 17.5vw;
            -webkit-transition: left 0.2s, width 0.2s ease-in-out;
            transition: left 0.2s, width 0.2s ease-in-out;

        }

        .found {
            margin-left: 7vw;
            font-family: neon;
            font-size: 5vw;
            color: #a7a7a7;
            float: left;
        }




        .resulttext {
            font-family: neon;
            font-size: 8vw;
            color: #ffffffe0;
            margin-left: 7vw;
            margin: 4vw 7vw;
        }

        .order {
            font-family: neon;
            font-size: 5vw;
            color: #a7a7a7;
            margin-right: 7vw;
            float: right;
        }

        .order>span {
            font-size: 3.5vw;
        }

        #dropdownarrow {
            transform: rotate(0deg);
            display: block;
            width: fit-content;
            float: right;
            margin-top: 1vw;
            margin-left: 3vw;
            -webkit-transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body onload="launch('home')">
    <div class="bg"></div>

    <div class="container" id="container">

    </div>

    <div class="navbar">
        <div onclick="launch('home');" class="bar home" id="home"></div>
        <div onclick="launch('search');" class="bar search" id="search"></div>
        <div class="bar middle"></div>
        <div onclick="launch('message');" class="bar message" id="message"></div>
        <div onclick="launch('profile');" class="bar profile" id="profile"></div>
    </div>



    <script>
        function appchild() {
            for (var i = 0; i < arguments.length; i++) {
                if (i != 0) {
                    arguments[0].appendChild(arguments[i]);
                }
            }
        }

        function empty() {

            $('.container').fadeOut(200);
            setTimeout(
                function() {
                    $(".container").empty();
                }, 300);
        }


        function home() {

            var container = document.getElementById("container");

            var nav = document.createElement("div");
            var featured = document.createElement("div");
            var greenline = document.createElement("div");
            var categories = document.createElement("div");
            var whiteline = document.createElement("div");
            var add = document.createElement("div");

            container.style.display = 'none';

            nav.className = 'nav';
            featured.className = 'featured';
            greenline.className = 'line-green';
            categories.className = 'categories';
            whiteline.className = 'line-white';
            add.className = 'add';

            var fyou = document.createElement("div");
            var notify = document.createElement("div");
            var popul = document.createElement("div");

            fyou.id = 'fyou';
            notify.className = 'notify';
            popul.id = 'popul';
            fyou.innerHTML = 'For you';
            popul.innerHTML = 'Popular';

            var fcontent1 = document.createElement("div");
            var fcontent2 = document.createElement("div");
            var fcontent3 = document.createElement("div");

            fcontent1.className = 'f-content';
            fcontent2.className = 'f-content';
            fcontent3.className = 'f-content';

            var fcontentmore = document.createElement("div");

            fcontentmore.className = 'f-content-more';

            var fplus = document.createElement("div");

            fplus.className = 'plus';
            fplus.innerHTML = '>';

            var cats1 = document.createElement("div");
            var cats2 = document.createElement("div");
            var cats3 = document.createElement("div");

            cats1.className = 'cats';
            cats2.className = 'cats';
            cats3.className = 'cats';
            cats1.innerHTML = 'Placeholder';
            cats2.innerHTML = 'Placeholder';
            cats3.innerHTML = 'Placeholder';

            var adds1 = document.createElement("div");
            var adds2 = document.createElement("div");
            var adds3 = document.createElement("div");

            adds1.className = 'adds blue';
            adds2.className = 'adds green';
            adds3.className = 'adds blue';

            var fcontentnew1 = document.createElement("div");
            var fcontentnew2 = document.createElement("div");
            var fcontentnew3 = document.createElement("div");

            fcontentnew1.className = 'new';
            fcontentnew2.className = 'new';
            fcontentnew3.className = 'new';
            fcontentnew1.innerHTML = 'new';
            fcontentnew2.innerHTML = 'new';
            fcontentnew3.innerHTML = 'new';

            var ftext1 = document.createElement("div");
            var ftext2 = document.createElement("div");
            var ftext3 = document.createElement("div");

            ftext1.className = 'f-text';
            ftext2.className = 'f-text';
            ftext3.className = 'f-text';
            ftext1.innerHTML = 'Placeholder';
            ftext2.innerHTML = 'Placeholder';
            ftext3.innerHTML = 'Placeholder';

            var ftextmore = document.createElement("div");

            ftextmore.className = 'f-text-more';
            ftextmore.innerHTML = '+5<br>more';

            var addsimg1 = document.createElement("img");
            var addsimg2 = document.createElement("img");
            var addsimg3 = document.createElement("img");

            addsimg1.src = 'res/upload.png';
            addsimg2.src = 'res/chellange.png';
            addsimg3.src = 'res/reward.png';

            var addtext1 = document.createElement("div");
            var addtext2 = document.createElement("div");
            var addtext3 = document.createElement("div");

            addtext1.className = 'add-text';
            addtext2.className = 'add-text';
            addtext3.className = 'add-text';
            addtext1.innerHTML = 'Placeholder';
            addtext2.innerHTML = 'Placeholder';
            addtext3.innerHTML = 'Placeholder';


            appchild(container, nav, featured, greenline, categories, whiteline, add);
            appchild(nav, fyou, notify, popul);
            appchild(featured, fcontent1, fcontent2, fcontent3, fcontentmore, fplus);
            appchild(fcontent1, fcontentnew1, ftext1);
            appchild(fcontent2, fcontentnew2, ftext2);
            appchild(fcontent3, fcontentnew3, ftext3);
            appchild(fcontentmore, ftextmore)
            appchild(categories, cats1, cats2, cats3);
            appchild(add, adds1, adds2, adds3);
            appchild(adds1, addsimg1, addtext1);
            appchild(adds2, addsimg2, addtext2);
            appchild(adds3, addsimg3, addtext3);

            $('.container').fadeIn(200);

        }

        function search() {
            var container = document.getElementById("container");
            var searchform = document.createElement("form");
            var filter = document.createElement("div");
            var amount = document.createElement("div");
            var results = document.createElement("div");
            var gradient = document.createElement("div");
            var hidetop = document.createElement("div");
            var hidebottom = document.createElement("div");



            filter.className = 'filter';
            hidetop.className = 'hide-top';
            hidebottom.className = 'hide-bottom';
            amount.className = 'amount';
            results.className = 'results';
            searchform.className = 'searchform';
            gradient.className = 'gradient';



            var users = document.createElement("div");
            var challenges = document.createElement("div");
            var filterselect = document.createElement("div");
            var amountnumber = document.createElement("div");
            var amounttext = document.createElement("div");
            var amountorder = document.createElement("div");
            var searchinput = document.createElement("input");

            users.className = 'users';
            challenges.className = 'challenges';
            filterselect.className = 'selector';
            amountnumber.className = 'result-amount';
            amountnumber.innerHTML = '0';
            amounttext.className = 'found';
            amountorder.className = 'order';
            searchinput.className = 'searchinput';
            searchinput.placeholder = 'Search';

            users.innerHTML = 'users';
            challenges.innerHTML = 'challenges';
            amounttext.innerHTML = 'users found';
            var typepostsearch = 'user';
            amountorder.innerHTML = 'order by <span id="dropdownarrow">v</span>'

            var dropped = 0;


            amountorder.onclick = function() {

                span = document.getElementById("dropdownarrow");
                    
                
  

                switch (dropped) {
                    case 0:
                        dropped = 1;
                        span.style.webkitTransform = 'rotate(90deg)';
                        span.style.mozTransform = 'rotate(90deg)';
                        span.style.msTransform = 'rotate(90deg)';
                        span.style.oTransform = 'rotate(90deg)';
                        span.style.transform = 'rotate(90deg)';
                        break;

                    case 1:
                        dropped = 0;
                        span.style.webkitTransform = 'rotate(0deg)';
                        span.style.mozTransform = 'rotate(0deg)';
                        span.style.msTransform = 'rotate(0deg)';
                        span.style.oTransform = 'rotate(0deg)';
                        span.style.transform = 'rotate(0deg)';
                        break;

                }



            };





            challenges.onclick = function() {

                filterselect.style.width = '36%';
                filterselect.style.left = '46.5vw';
                amounttext.innerHTML = 'challenges found';
                typepostsearch = 'challenge';
                $('.searchinput').keyup();



            };

            users.onclick = function() {

                filterselect.style.width = '20%';
                filterselect.style.left = '17.5vw';
                amounttext.innerHTML = 'users found';
                typepostsearch = 'user';
                $('.searchinput').keyup();

            };

            searchinput.onkeyup = function() {

                if ($('.searchinput').val() !== '') {

                    $.post("scripts/search.php", {
                            type: typepostsearch,
                            query: searchinput.value
                        },
                        function(data, status) {
                            $(".results").empty();
                            obj = JSON.parse(data);

                            for (var i = 0; i < obj.length; i++) {
                                var json = obj[i];
                                var texttt = document.createElement('div');
                                amountnumber.innerHTML = obj.length;
                                texttt.className = 'resulttext';
                                switch (typepostsearch) {
                                    case 'user':
                                        texttt.innerHTML = json.username;
                                        break;

                                    case 'challenge':
                                        texttt.innerHTML = json.title;
                                        break;

                                }

                                results.appendChild(texttt);

                            }

                        });

                } else {
                    $(".results").empty();
                    amountnumber.innerHTML = '0';
                }


            };


            appchild(container, hidetop, gradient, searchform, filter, amount, hidebottom, results);
            appchild(searchform, searchinput);
            appchild(filter, users, challenges, filterselect);
            appchild(amount, amountnumber, amounttext, amountorder);

            $('.container').fadeIn(200);

        }
        
        function message() {
            var container = document.getElementById("container");
        }

        function launch(knop) {
            empty();
            document.getElementById('home').style.backgroundImage = "url('res/nav/homeb.png')";
            document.getElementById('search').style.backgroundImage = "url('res/nav/searchb.png')";
            document.getElementById('message').style.backgroundImage = "url('res/nav/messageb.png')";
            document.getElementById('profile').style.backgroundImage = "url('res/nav/profileb.png')";
            $("body").removeClass("bodytrans");
            switch (knop) {

                case 'home':
                    document.getElementById('home').style.backgroundImage = "url('res/nav/homeg.png')";
                    setTimeout(function() {
                        home();
                    }, 300);
                    break;


                case 'search':
                    document.getElementById('search').style.backgroundImage = "url('res/nav/searchg.png')";
                    setTimeout(function() {
                        $("body").toggleClass('bodytrans');
                        search();
                    }, 300);
                    break;


                case 'message':
                    document.getElementById('message').style.backgroundImage = "url('res/nav/messageg.png')";
                    setTimeout(function() {
                        message();
                    }, 300);
                    break;


                case 'profile':
                    document.getElementById('profile').style.backgroundImage = "url('res/nav/profileg.png')";
                    setTimeout(function() {
                        profile();
                    }, 300);
                    break;
            }

        }
        
        

        

    


    </script>
</body>


</html>