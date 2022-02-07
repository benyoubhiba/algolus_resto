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
        <img src="img/preloader.svg" alt="sit web Algolus Resto" />
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
                        <h2 class="text-uppercase">Réservations </h2>

                    </div>
                </div>
            </div>
        </section>


        <!-- Reservations page - OPENTABLE -->
        <section class="reservation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header wow fadeInDown">
                            <h2>algolus resto<small>Réservez une table en ligne</small></h2>
                        </div>
                    </div>
                </div>
                <div class="reservation-form wow fadeInUp">
                    <div class="open-table-container" data-restaurant-id="66241">
                        <div id="OT_searchWrapperAll">
                            <form class="contact-form" id="contactForm" action="php/contact.php" method="post"">
                            <div id="OT_searchWrapper">
                                <div id="OT_defList" class="row">
                                    <div id="" class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom et prenom</label>
                                            <input class="form-control" name="name" id="name" placeholder="Nom complet" type="text" required="required" />
                                        </div>
                                    </div>

                                    <div id="" class="col-md-4">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type="email" name="email" id="email" placeholder="Adresse électronique" required="required" />
                                        </div>
                                    </div>

                                    <div id="" class="col-md-4">
                                        <div class="form-group">
                                            <label>Télepone</label>
                                            <input class="form-control" type="tel" name="tell" id="tell" placeholder="Téléphone" required="required" />
                                        </div>
                                    </div>

                                    <div id="OT_date" class="col-md-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="text" id="datepicker" class="OT_feedFormfieldCalendar datepicker" name="startDate" placeholder="Choisis une date" required="required">
                                            <i class="fa fa-calendar-o"></i>
                                        </div>
                                    </div>

                                    <div id="OT_partySize" class="col-md-4">
                                        <div class="form-group">
                                            <label>Invités</label>
                                            <select name="PartySize" class="feedFormField" required="required">
                                                <option selected disabled>Nombre des personnes</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>

                                    <div id="OT_time" class="col-md-4">
                                        <div class="form-group">
                                            <label>Temps</label>
                                            <select name="ResTime" class="feedFormField" required="required">
                                                <option selected disabled>Choisissez une heure</option>
                                                <option value="10:00 MATIN">10:00</option>
                                                <option value="10:30 MATIN">10:30</option>
                                                <option value="11:00 MATIN">11:00</option>
                                                <option value="11:30 MATIN">11:30</option>
                                                <option value="12:00 APRÈS-MIDI">12:00</option>
                                                <option value="12:30 APRÈS-MIDI">12:30</option>
                                                <option value="1:00 APRÈS-MIDI">13:00</option>
                                                <option value="1:30 APRÈS-MIDI">13:30</option>
                                                <option value="2:00 APRÈS-MIDI">14:00</option>
                                                <option value="2:30 APRÈS-MIDI">14:30</option>
                                                <option value="3:00 APRÈS-MIDI">15:00</option>
                                                <option value="3:30 APRÈS-MIDI">15:30</option>
                                                <option value="4:00 APRÈS-MIDI">16:00</option>
                                                <option value="4:30 APRÈS-MIDI">16:30</option>
                                                <option value="5:00 APRÈS-MIDI">17:00</option>
                                                <option value="5:30 APRÈS-MIDI">17:30</option>
                                                <option value="6:00 APRÈS-MIDI">18:00</option>
                                                <option value="6:30 APRÈS-MIDI">18:30</option>
                                                <option value="7:00 APRÈS-MIDI">19:00</option>
                                                <option value="7:30 APRÈS-MIDI">19:30</option>
                                                <option value="8:00 APRÈS-MIDI">20:00</option>
                                                <option value="8:30 APRÈS-MIDI">20:30</option>
                                                <option value="9:00 APRÈS-MIDI">21:00</option>
                                                <option value="9:30 APRÈS-MIDI">21:30</option>
                                                <option value="10:00 APRÈS-MIDI">22:00</option>
                                                <option value="10:30 APRÈS-MIDI">22:30</option>
                                                <option value="11:00 APRÈS-MIDI">23:00</option>
                                                <option value="11:30 APRÈS-MIDI">23:30</option>
                                                <option value="11:00 APRÈS-MIDI">00:00</option>
                                                <option value="11:30 APRÈS-MIDI">00:30</option>
                                            </select>
                                            <i class="fa fa-clock-o"></i>
                                        </div>

                                        <!--                                            <button class="btn btn-default btn-lg btn-block" id="js-contact-btn" disabled>Envoyer le message</button>-->
                                    </div>

                                    <div class="form-group col-md-4">
                                        <div class="">
                                            <label style="padding-top: 15px" for="">test anti spam <b style="font-size: 15px"><?php echo $a ."+".$b."=  "?>&nbsp;</b></label>
                                        </div>
                                        <div style="padding-bottom: 15px" >
                                            <input class="form-control" placeholder="calcule" type="text" id="calc" name="calc">
                                            <input type="hidden" id="nbr1" name="nbr1" value="<?php echo $a ?>">
                                            <input type="hidden" id="nbr2" name="nbr2" value="<?php echo $b ?>">
                                            <input type="hidden" id="" name="test" value="1">
                                            <i class="icon icon-calculator"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div id="OT_submitWrap" class="reservation-btn">
                                <button type="submit" class="btn btn-default btn-lg OT_TableButton" id="js-contact-btn" disabled>Faire une réservation</button>
                                <br>
                                <a href="https://www.google.com/maps/reserve/v/dine/c/NUdeTgUfTNI?source=pa&hl=fr-MA&gei=F1SvXNSvHtLbgwe16paICg&sourceurl=https://www.google.com/search?q%3Drestaurant%2Ble%2Bpavillon%2Bbleu%2Bsaint%2Bmaur%26source%3Dlnms%26sa%3DX%26ved%3D0ahUKEwjl6qyuo8jhAhUO1hoKHQ7EANUQ_AUICSgA%26biw%3D1680%26bih%3D907%26dpr%3D1&d=1555088400000&ld=20190412T190000" target="_blank" id="js-contact-btn">Tables disponibles</a>
                            </div>

                            </form>
                            <div id="js-contact-result" data-success-msg="Formulaire soumis avec succès." data-error-msg="Oops. Quelque chose s'est mal passé."></div>
                            <!--/DO NOT REMOVE/-->
                        </div>
                    </div>
                </div>
                <div class="reservation-footer">
                    <p>Vous pouvez aussi appeler: <strong>00 33 1 48 83 10 56</strong> pour faire une réservation.</p>

                    <span></span>
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
