<?php
/**
3 * DWA15 - Project 1
4 *
5 * PHP version  5
6 *
7 * @author    Roman Orlov, <riorlov@gmail.com>
9 */
require_once('QuoteLogic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Roman Orlov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Roman Orlov</h1>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">About me: <span class="text-muted">I am located in Boston, MA.</span></h2>
                <p class="lead">
                    I work at Wayfair as an SCCM administator. However, I would like to pursue a web developer
                    career with the help of this course. I am currently working on a few small PHP projects on top of my
                    daily routine, which involves some Powershell scripting. I consider myself a beginner in PHP even
                    though I have a bachelor’s degree in computer science. When I am not glued to a computer screen I
                    spend time at the gym or fishing.
                </p>
            </div>
            <div class="col-md-5">
                <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="featurette-image img-fluid mx-auto" src="images/slide1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="featurette-image img-fluid mx-auto" src="images/slide2.jpg" alt="Second slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Random Quote</h2>
        <blockquote>
            <?php
            echo getRandomQuote($quoteArray);
            ?>
        </blockquote>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
</body>
</html>
