<?php
require_once 'url.php';
require_once 'seo.php';

$nember = array(1, 2, 3, 4, 5, 6,7,8,9);
shuffle($nember);
$a = $nember[3];
$b = $nember[7];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?=$titelContact?></title>
    <meta name="author" content="Surjith S M">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionContact?>">
    <meta name="keywords" content="<?=$titelContact?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/plugin.css">
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
            <img src="img/preloader.svg" alt="sit web algolus resto" />
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
                            <h2 class="text-uppercase">Contact</h2>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Form / Info -->
            <section class="main-content contact-content">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div style="padding-top: 10%" class="col-md-6 wow zoomInLeft ">
                                <h3 class="text-left no-margin-top">ADRESSE</h3>
                                <div class="footer-address contact-info">
                                    <p><i class="fa fa-map-marker"></i>Mr Dominique  Stumm 66, promenade des Anglais 94210 La Varenne saint Hilaire</p>
                                    <p><i class="fa fa-phone"></i><a href="tel:00 33 1 48 83 10 56">Téléphone: 00 33 1 48 83 10 56</a></p>
                                    <p><i class="fa fa-envelope-o"></i>lepavillonbleualavarenne@wanadoo.fr</p>
                                </div>
                                <br>

                                <h3 class="text-left no-margin-top">Heures de travail</h3>
                                <div class="contact-info text-muted">
                                    <p>Restaurant ouvert 7/7</p>

                                </div>
                                <br>


                            </div>
                            <div class="col-md-6 wow slideInDown">
                                <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="Nom complet" type="text" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Adresse électronique" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="sujet" type="text" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label style="padding-top: 15px" for="">test anti spam <b style="font-size: 15px"><?php echo $a ."+".$b."=  "?>&nbsp;</b></label>
                                        </div>
                                        <div style="padding-bottom: 15px" class="col-md-6">
                                            <input class="form-control" placeholder="calcule" type="text" id="calc" name="calc">
                                            <input type="hidden" id="nbr1" name="nbr1" value="<?php echo $a ?>">
                                            <input type="hidden" id="nbr2" name="nbr2" value="<?php echo $b ?>">
                                            <input type="hidden" id="" name="test" value="0">
                                            <i class="icon icon-calculator"></i>
                                        </div>

                                    </div>
                                    <button class="btn btn-default btn-lg btn-block" id="js-contact-btn" disabled>Envoyer le message</button>
                                </form>
                                <div id="js-contact-result" data-success-msg="Formulaire soumis avec succès." data-error-msg="Oops. Quelque chose s'est mal passé."></div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Map -->
            <!-- Set latitude and Longitude (Get it from http://google.com/maps) -->
<!--            <div id="map" data-latitude="40.6700" data-longitude="-73.9400"></div>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.817855333817!2d2.509603315801802!3d48.78536751379932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60c6e8e5895fb%3A0x5bed28d3a1f7ed0e!2sLe+Pavillon+Bleu+-+STUMM!5e0!3m2!1sfr!2sma!4v1554140582526!5m2!1sfr!2sma" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          <?php
          require_once 'footer.php'
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
    <script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="js/vendor/mc/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/vendor/map.js"></script>
<!--captcha de validation de mesage-->
    <script >

        $(document).ready(function () {

            var a= $('#nbr1').val(),
                b= $('#nbr2').val(),
                c=$('#calc'),
                d=$('#js-contact-btn'),
                som=0;
            som=(parseInt(a)+parseInt(b));
            c.keyup(function () {
                console.log(som);

                $tr=c.val();
                if (parseInt($tr)===som){
                    // console.log('correct');
                    d.removeAttr('disabled');
                }else{
                    d.attr('disabled','disabled');
                }
            })

        })


    </script>


    <!-- Contact JS -->
    <script src="js/vendor/validate.js"></script>
    <script src="js/contact.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
