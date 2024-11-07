<?php include("admin/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>INDIAN HISTORY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        
        
        .frame{
            width: 100%;
            height: calc(100% - 32px);
            margin-bottom: -10px;
        }

        .img-tag {
            width: 100%;
        }

        .videotext {
            display: flex;
            justify-content: center;

            text-align: center;
            color: black;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">INDIAN HISTORY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="gallery.php" class="nav-link">Photos</a></li>
                    <li class="nav-item"><a href="videos.php" class="nav-link">Videos</a></li>
                    <li class="nav-item active"><a href="records.php" class="nav-link">Authenticate Records</a></li>
                    <li class="nav-item"><a href="papers.php" class="nav-link">Research papers</a></li>
                    <li class="nav-item"><a href="vision.html" class="nav-link">Vision</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('images/records.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Authenticate Records</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Authenticate Records</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-gallery">
        <div class="container">
            <div class="row">
                <?php $a = "select * from records order by id desc";
                $sq = mysqli_query($link, $a);
                $i = 1;
                while ($r = mysqli_fetch_array($sq)) {
                ?>
                    <div class="col-lg-6 col-md-12 col-xs-12 video-div">
                        <?php
                        if (strpos($r['file'], ".pdf") !== false) {
                        ?>
                            <iframe class="frame" src="upload/gallery/<?php echo $r['file']; ?>#toolbar=0">

                            </iframe>
                            <div><a class="videotext" href="upload/gallery/<?php echo $r['file']; ?>#toolbar=0"><?php echo $r['title']; ?></a></div>
                        <?php
                        } else {
                        ?>
                            <a href="upload/gallery/<?php echo $r['file']; ?>" class="image-popup gallery-img"> <img src="upload/gallery/<?php echo $r['file']; ?>" class="img-tag" /></a>
                            <div><a class="videotext" href="upload/gallery/<?php echo $r['file']; ?>"><?php echo $r['title']; ?></a></div>
                        <?php
                        }
                        ?>
                        
                    </div>

                <?php } ?>
            </div>
        </div>
    </section>

    <!--<section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch" style="background-image: url(images/bg_4.jpg);"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>Indian history is celebrated across the nation marking the glory prosperity it has achieved. A hundred
                            years ago, we didn’t have a nation called India, it was all federation of various kingdoms, dynasties that
                            defined and collectively called as a region of Hindustan, at some places as India. Indian history is so
                            rich and diverse that most of us are not even aware of it.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vision</h2>
                        <p>our main moto is to create awareness among citizens that past rulers worked to words
                            development with out consideration ,cast ,
                            Religion and other......</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Site Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Home</a></li>
                            <li><a href="#" class="py-2 d-block">Authenticate records</a></li>
                            <li><a href="#" class="py-2 d-block">Photos</a></li>
                            <li><a href="#" class="py-2 d-block">Videos</a></li>
                            <li><a href="#" class="py-2 d-block">Research papers</a></li>
                            <li><a href="#" class="py-2 d-block">Vision</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                              <!--  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                                        Francisco, California, USA</span></li>-->
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+919394849337</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+919028100066</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">historwelfaresociety@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>