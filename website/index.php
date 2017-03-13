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
<div class="wrapper">
    <div class="slideshow">
        <img class="slide" src="img/black_lozenge.png" alt="">
        <img class="slide" src="img/dark_dotted2.png" alt="">
        <img class="slide" src="img/ep_naturalblack.png" alt="">
        <img class="slide" src="img/stardust.png" alt="">
        <img class="slide" src="img/zwartevilt.png" alt="">
    </div>
    <div class="main-content">
        <div class="container flex">
            <header>
                <div class="logo">

                </div>
                <nav class="navigation align-center">
                    <ul>
                        <li onclick="currentPage(1)">Home</li>
                        <li onclick="currentPage(2)">About Me</li>
                        <li onclick="currentPage(3)">Prices</li>
                        <li onclick="currentPage(4)">Review</li>
                        <li onclick="currentPage(5)">Contact</li>
                    </ul>
                </nav>
            </header>
            <div class="pages">
                <div class="page">
                    <h1>page1</h1>
                </div>
                <div class="page">
                    <h1>page2</h1>
                </div>
                <div class="page">
                    <h1>page3</h1>
                </div>
                <div class="page">
                    <h1>Page4</h1>
                </div>
                <div class="page">
                    <h1>Page5</h1>
                </div>
            </div>
            <footer>
                <nav>
                    <ul>
                        <li></li>
                    </ul>
                </nav>
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
</div>
</body>
</html>