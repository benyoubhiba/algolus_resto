<?php
require_once 'url.php';
require_once 'seo.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?=$titelrestaurant?></title>
    <meta name="author" content="pavillon bleu">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionrestaurant?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
    <link rel="stylesheet" href="js/vendor/vegas/vegas.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/themes/cyan.css" rel="stylesheet">


    <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Preloder-->
    <div class="preloder animated">
        <div class="scoket">
            <img src="img/preloader.svg" alt="" />
        </div>
    </div>

    <div class="body">

        <div class="main-wrapper">
            <!-- Navigation-->
            <?php
            require_once 'header.php';
            ?>

            <!-- Page Header -->
            <section class="page_header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="text-uppercase">Galerie</h2>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery -->
            <div class="gallery-content">
                <div class="container">
                    <div class="row">

                        <?php
                            for($i=1;$i<=29;$i++):
                        ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-item" data-mfp-src="img/gallery/<?=$i?>.jpg">
                                <img style="height: 300px" src="img/gallery/<?=$i?>.jpg" class="img-responsive" alt="algolus resto" />
                                <div class="gi-overlay">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <?php endfor;?>

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/3.jpg">-->
<!--                                <img src="img/gallery/1.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/4.jpg">-->
<!--                                <img src="img/gallery/4.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/5.jpg">-->
<!--                                <img src="img/gallery/5.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/6.jpg">-->
<!--                                <img src="img/gallery/6.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/7.jpg">-->
<!--                                <img src="img/gallery/1.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/8.jpg">-->
<!--                                <img src="img/gallery/2.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="gallery-item" data-mfp-src="img/gallery/9.jpg">-->
<!--                                <img src="img/gallery/3.jpg" class="img-responsive" alt="" />-->
<!--                                <div class="gi-overlay">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>

            <?php
            require_once 'footer.php';
            ?>
        </div>

    </div> 

    <!-- Javascript -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/jquery.flexslider-min.js"></script>
    <script src="js/vendor/spectragram.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/velocity.min.js"></script>
    <script src="js/vendor/velocity.ui.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/vendor/vegas/vegas.min.js"></script>
    <script src="js/vendor/jquery.mb.YTPlayer.js"></script>
    <script src="js/vendor/jquery.stellar.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendor/mc/main.js"></script>

</body>

</html>
