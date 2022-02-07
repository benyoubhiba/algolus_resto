
<?php
require_once 'url.php';
include ('admin_pavillon_bleu/configuration/config.php');
require_once 'seo.php';
require_once 'keySeo.php';


try {
    $data= mysqli_query($connect,"SELECT * FROM cart  where  activation = 1")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?=$titelLiensUtiles?></title>
    <meta name="author" content="pavillon bleu">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionLiensUtiles?>">

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

<body id="intro3">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Preloder-->
<div class="preloder animated">
    <div class="scoket">
        <img src="img/preloader.svg" alt="laalgolus resto" />
    </div>
</div>

<div class="body">

    <!-- Navigation-->
    <?php
    require_once 'header.php';
    ?>

    <!-- Page Header -->
    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 hidden>Restaurant algolus resto
                        Cuisine traditionnelle et authentique</h1>
                    <h2 class="text-uppercase">Liens Utiles
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="main-wrapper">
        <div class="flat-row flat-general sidebar-right pad-bottom75px">
            <div class="container">
                <div class="" style=" text-align: center">

                </div>
                <div class="row " style="padding-top: 100px">
                    <div style="text-align: justify" class="col-md-6 wow animated zoomInLeft ">
                        <div>
                            <div class="">
                                <div class="">
                                    <ul style="list-style:none; font-size: 16px; line-height: 2">
                                        <?php foreach($seo_places as $place_slug => $place_label) {
                                            foreach($seo_keys as $key_slug => $key_label) { ?>
                                                <a href="lien-utiles/<?php echo $key_slug . "/" . $place_slug; ?>"><li><i class="fa fa-heart"></i>&nbsp;&nbsp; <?php echo $key_label . " à " . $place_label; ?></li></a>
                                            <?php }
                                        } ?>
                                    </ul>
                                </div>
                            </div><!-- /.textwidget -->
                        </div>
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->


            </div>
        </div><!-- /.blog -->




        <!-- menu-->
        <section class="menu menu2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header wow fadeInDown">
                            <h1>Nos Cartes</h1>
                        </div>
                    </div>
                </div>
                <div class="food-menu wow fadeInUp">
                    <div class="row menu-items2">

                        <?php foreach ($data as $row) :
                            $id = $row['id_cart'];
                            $image = $row['image'];
                            $titre = $row['nom_cart'];
                            $active = $row['activation'];


                            $da= mysqli_query($connect,"SELECT COUNT(id_cart) FROM detaille WHERE id_cart = '$id'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                            $kk = mysqli_fetch_all($da);

                            if($kk[0][0] != 0):
                                ?>

                                <div class="menu-item2 col-sm-4 col-xs-12 starter dinner desserts">
                                    <div style="height: 240px" class="menu-info">
                                        <img style="height: 100%; width: 100%" src="images/menus-et-cartes/<?= $image?>" class="img-responsive" alt="cartes et met dealgolus resto" />
                                        <a href="<?=$url?>carte-pavillon-bleu/<?=$id?>">
                                            <div style="padding-top: 20px" class="menu2-overlay">
                                                <h4 style="text-transform: none"><?=$titre?></h4>
                                                <a style="margin-top: 20px;border-radius: 6px" href="<?=$url?>carte-pavillon-bleu/<?=$id?>"  class="btn btn-info">voir +</a>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="<?=$url?>carte-pavillon-bleu/<?=$id?>" class="menu-more">+</a>
                                </div>
                            <?php
                            endif;
                        endforeach; ?>


                    </div>
                </div>
            </div>
        </section>




        <!-- Footer-->
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
