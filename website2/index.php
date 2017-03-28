<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
    <link rel="icon" href=img/favicon.ico" type="image/x-icon" />
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
            <form action="scripts/loguser.php" method="GET" class="flex">
                <div id="form-left">
                <p id="error-message"><?php if(isset($_GET['errorMessage'])) { echo $_GET['errorMessage']; } elseif(!isset($_GET['usernameMessage'])) { echo "Please enter your user credentials"; }  ?><?php if(isset($_GET['usernameMessage'])) { echo $_GET['usernameMessage']; } ?></p>
                    <input type="text" placeholder="Username" name="username" id="username">
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>
                <input type="submit" value="Log in" id="login">
            </form>
        </header>
        <div class="main-content">
            <div class="home">
                <h2>Welcome!</h2>
                <div class="welcome-info flex-between">
                    <div class="welcome-text">
                        <p>Welcome to the official website of SpaceRace. here you can download a copy of the game for free to test it and give feedback to us.</p>
                        <p>Here you have a sneak peak at the game en its UI.</p>
                        <p>SpaceRace is a game that is based around horsebetting but with a special twist.
                            the main purpose of the game is to have fun with your friends and maybe sometimes make some money of it
                            within your friend group. the game is made by a group of developers that had an order to make a game
                            that looks like horserace but in space with ufo's'. the extra task was to give a random spacehip a boost.</p>
                    </div>
					<form action="scripts/createaccount.php" method="GET">
					<p id="information"><?php if(isset($_GET['errorMessage'])) { echo $_GET['errorMessage']; } elseif(!isset($_GET['usernameMessage'])) { echo "Please enter your desired user credentials"; }  ?><?php if(isset($_GET['usernameMessage'])) { echo $_GET['usernameMessage']; } ?></p>
					<input type="text" placeholder="Username" name="username" id="username" data-cip-id="username">
					<input type="password" placeholder="Password" name="password" id="password" data-cip-id="cIPJQ342845639">
					<input type="password" placeholder="Re-enter password" name="password2" id="password" data-cip-id="cIPJQ342845640">
					<input type="text" placeholder="Email" name="email" id="email" data-cip-id="email">
					<input type="submit" value="Register" id="register">
					<input type="submit" value="Cancel" id="cancel">
					</form>
                </div>

            </div>
            <div class="download">
                <div class="download-info">
                    <h2>Download</h2>
                    <p> If u want to download the game you firstly need an account on this website.</p>
                    <p>This game is made for windows computers.</p>
                    <div class="downloadbutton">
                    <?php
                        session_start();
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo '<a href="file/Spacerace_g19.zip" download class="button button-gray">Download</a>';
                            session_destroy();
                        } else {
                            echo '<p>Please login first to download this file.</p>';
                        }
                    ?>
                    </div>
                </div>
            </div>
            <div class="gallery">
             <h2>Gallery &amp; Screenshots</h2>

            </div>
            <div class="contact ">
                <h2>Contact &amp; Feedback</h2>
                    <p>If you want to give feedback or contact us then it's possible to email us
                    we will try to respond within a day.</p>
                    <div class="email flex-between">
                        <form action="scripts/sendmail.php" method="POST">
                            <fieldset>
                                <legend>Personal information:</legend>

                                Name:
                                <input type="text" name="name" required>

                                Email Adress:
                                <input type="text" name="email" required>

                                Message:
                                <textarea type="text" name="message" id="message" required></textarea>

                                <input type="submit" value="Submit">
                            </fieldset>
                        </form>
                    </div>
            </div>

        </div>
        <footer>
          <p>Contact information: <a href="mailto:someone@example.com">
          spaceraceg19@gmail.com</a>.</p>
          <img src="img/Spacerace_Logo.png" alt="Spacerace Logo" width=100 height=100>
          <p id="created">Website created by: De Gokkers</p>

        </footer>
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
