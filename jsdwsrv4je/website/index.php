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

<<<<<<< Updated upstream
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
                <h1>SpaceRace</h1>
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
                    </div>
                    <img src="http://lorempixel.com/g/400/200/" alt="testuh">
=======
                </div>
                <nav class="navigation align-center">
                    <ul>
                        <li onclick="currentPage(1)">SpaceRace</li>
                        <li onclick="currentPage(2)">Login/Register</li>
                        <li onclick="currentPage(3)">Download</li>
                        <li onclick="currentPage(4)">Feedback</li>
                        <li onclick="currentPage(5)">Contact</li>
                    </ul>
                </nav>
            </header>
            <div class="pages">
                <div class="page">
                    <div class="paragraph">
                    <h1>SpaceRace</h1>
                        <p>SpaceRace is a game that is based around horsebetting but with a special twist.
                            the main purpose of the game is to have fun with your friends and maybe sometimes make some money of it
                            within your friend group. the game is made by a group of developers that had an order to make a game
                            that looks like horserace but in space with ufo's'. the extra task was to give a random spacehip a boost.
                        </p>
                    </div>
                </div>
                <div class="page">
                    <div class="paragraph">
                        <h1>Login/Register</h1>
                    </div>
                </div>
                <div class="page">
                    <div class="paragraph">
                        <h1>Download</h1>
                    </div>
                </div>
                <div class="page">
                    <div class="paragraph">
                        <h1>Feedback</h1>
                    </div>
                </div>
                <div class="page">
                    <div class="paragraph">
                        <h1>Contact</h1>
                    </div>
>>>>>>> Stashed changes
                </div>
            </div>
            <div class="about">
                <p>SpaceRace is a game that is based around horsebetting but with a special twist.
                            the main purpose of the game is to have fun with your friends and maybe sometimes make some money of it
                            within your friend group. the game is made by a group of developers that had an order to make a game
                            that looks like horserace but in space with ufo's'. the extra task was to give a random spacehip a boost.</p>
            </div>
            <div class="gallery">

            </div>
            <div class="contact">

            </div>
        </div>
    </div>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>




















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
        setTimeout(slideShow, 5000);
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
