<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>

<div class="slideshow">
    <img class="slide" src="img/andromeda-galaxy-755442_1280.jpg" alt="">
    <img class="slide" src="img/milky-way-1655504_1280.jpg" alt="">
    <img class="slide" src="img/milky-way-923801_1280.jpg" alt="">
    <img class="slide" src="img/arch-896900_1280.jpg" alt="">
</div>
<div class="wrapper">
    <div class="container">
        <header class="flex-between">           
            <div class="logo">
                <h1>SpaceRace™</h1>
            </div>
            <nav class="navigation">
                <ul class="flex-between"> 
                    <li>Home</li>
                    <li>About</li>
                    <li>Gallery</li>
                    <li>Contact</li>
                </ul
            </nav>
        </header>
        <div class="main-content">
            <div class="home">
                <h2>Welcome!</h2>
                <div class="welcome-info flex-between">
                    <div class="welcome-text">
                        <p>Welcome to the official website of SpaceRace. here you can download a copy of the game for free to test it and give feedback to us.</p>
                        <p>Here u have a sneak peak at the game en its UI.</p>
                        <p>SpaceRace is a game that is based around horsebetting but with a special twist.
                            the main purpose of the game is to have fun with your friends and maybe sometimes make some money of it
                            within your friend group. the game is made by a group of developers that had an order to make a game
                            that looks like horserace but in space with ufo's'. the extra task was to give a random spacehip a boost.</p>
                    </div>

                </div>
            </div>
            <div class="Download">
                <div class="download-info">
                    <h2>Download</h2>
                    <p> If u want to download the game you firstly need an account on this website.</p>
                    <p>This game is made for windows computers.</p>
                </div>
            </div>
            <div class="gallery">
            
            </div>
            <div class="contact">

            </div>
        </div>
    </div>



















</div>
<script>
    var myIndex = 0;
    slideShow();

    function slideShow() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(slideShow, 10000);
    }
    var pageIndex = 1;
    showPages(pageIndex);

    function plusPage(n) {
        showPages(pageIndex += n);
    }

    function currentPage(n) {
        showPages(pageIndex = n);
    }

    function showPages(n) {
        var i;
        var x = document.getElementsByClassName("page");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {pageIndex = 1}
        if (n < 1) {pageIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace();
        }
        x[pageIndex-1].style.display = "block";
        dots[pageIndex-1].className;
    }
</script>
</body>
</html>