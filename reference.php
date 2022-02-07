
<?php
require_once 'url.php';
include ('admin_pavillon_bleu/configuration/config.php');
require_once 'keySeo.php';
require_once 'seo.php';
$place=$seo_places[$_GET['place']];
$motCle=$seo_keys[$_GET['key']];


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
    <title><?=$motCle?> à <?=$place?> <?=$titelReference?></title>
    <meta name="author" content="Surjith S M">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionReference?>">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?=$url;?>img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?=$url;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url;?>css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?=$url;?>css/plugin.css">
    <link rel="stylesheet" href="<?=$url;?>js/vendor/vegas/vegas.min.css">
    <link rel="stylesheet" href="<?=$url;?>css/main.css">
    <link href="<?=$url;?>css/themes/cyan.css" rel="stylesheet">

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
        <img src="<?=$url;?>img/preloader.svg" alt="Algolus Resto" />
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
                    <h1 hidden> Algolus Resto
                        Cuisine traditionnelle et authentique</h1>
                    <h2 class="text-uppercase"><?=$motCle?> à <?=$place?>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <div class="main-wrapper">
        <!-- About page-->
        <section class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="page-header wow fadeInDown col-md-8">
                            <h1>Algolus Resto<small><?=$motCle?> à <?=$place?></small></h1>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row">
                                <img style="width: 100%" src="<?=$url;?>img/pavillon/apropos.jpg" alt="pavillon bleu apropos">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>
                        Algolus Resto existe depuis 1895 et c'est un des établissements les plus anciens de la période dite des années folles. C'est le seul restaurant à proximité immédiate de Paris à pouvoir proposer une cuisine traditionnelle et authentique dans un décor bucolique rigoureusement préservé sur les bords de Marne à la Varenne Saint Hilaire dans le Val de Marne.
                        </p>
                        <br>
                        <p>
                            Au printemps-été, une grande terrasse de plus de 100 couverts face à la marne et deux salles d'une capacité de 30 à 40 couverts " les terrasses dualgolus resto" côté marne et "la maison dualgolus resto " côté chaussée sont proposées au gré des clients et visiteurs de l'établissement.
                        </p>
                        <a class="btn btn-default" href="<?=$url;?>restaurant" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>




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
                                        <img style="height: 100%; width: 100%" src="<?=$url;?>images/menus-et-cartes/<?= $image?>" class="img-responsive" alt="Carte et menus dualgolus resto" />
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
<script src="<?=$url;?>js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?=$url;?>js/vendor/bootstrap.min.js"></script>
<script src="<?=$url;?>js/vendor/jquery.flexslider-min.js"></script>
<script src="<?=$url;?>js/vendor/spectragram.js"></script>
<script src="<?=$url;?>js/vendor/owl.carousel.min.js"></script>
<script src="<?=$url;?>js/vendor/velocity.min.js"></script>
<script src="<?=$url;?>js/vendor/velocity.ui.min.js"></script>
<script src="<?=$url;?>js/vendor/bootstrap-datepicker.min.js"></script>
<script src="<?=$url;?>js/vendor/bootstrap-clockpicker.min.js"></script>
<script src="<?=$url;?>js/vendor/jquery.magnific-popup.min.js"></script>
<script src="<?=$url;?>js/vendor/isotope.pkgd.min.js"></script>
<script src="<?=$url;?>js/vendor/slick.min.js"></script>
<script src="<?=$url;?>js/vendor/wow.min.js"></script>
<script src="<?=$url;?>js/animation.js"></script>
<script src="<?=$url;?>js/vendor/vegas/vegas.min.js"></script>
<script src="<?=$url;?>js/vendor/jquery.mb.YTPlayer.js"></script>
<script src="<?=$url;?>js/vendor/jquery.stellar.js"></script>
<script src="<?=$url;?>js/main.js"></script>
<script src="<?=$url;?>js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="<?=$url;?>js/vendor/mc/main.js"></script>
<script>
    new WOW().init();
</script>
</body>

</html>
