<?php
require_once 'url.php';
include ('admin_pavillon_bleu/configuration/config.php');
require_once 'seo.php';

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
        <img src="img/preloader.svg" alt="preloderalgolus resto" />
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
                        <h1 hidden>Restaurant Algolus Resto
                            Cuisine traditionnelle et authentique</h1>
                        <h2 class="text-uppercase wow zoomInDown">Restaurant Algolus Resto
                            Cuisine traditionnelle et authentique
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- menu-->


        <section class="about2">
            <div class="container">
                <div class="row ">
                    <div class="col-md-5 wow zoomIn">
                        <img src="img/gallery/1.jpg" class="img-responsive" alt="Algolus Resto existe depuis 1895 " />
                    </div>
                    <div style="padding-top: 0px" class="col-md-7 text-left wow slideInRight">
                        <h2 class="text-left">Algolus Resto existe depuis 1895 </h2>
                        <p> C'est un des établissements les plus anciens de la période dite des années folles. Il vécu plusieurs vies avant que Dominique Stumm ne décide d'en faire une des meilleures tables de la Région Parisienne. C'est le seul restaurant à proximité immédiate de Paris à pouvoir proposer une cuisine traditionnelle et authentique dans un décor bucolique rigoureusement préservé sur les bords de Marne à la Varenne Saint Hilaire dans le Val de Marne.</p>
                        <a class="btn btn-default" role="button" href="<?=$url;?>menus-et-cartes">Voir nos cartes </a>
                        <a class="btn btn-default" role="button" href="<?=$url;?>contact">Nous contacter </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about2">
            <div class="container">
                <div class="row ">

                    <div class="col-md-7 text-left wow slideInLeft">
                        <h2 class="text-left">Printemps-été dualgolus resto</h2>
                        <p> Au printemps-été, une grande terrasse de plus de 100 couverts face à la marne et deux salles d'une capacité de 30 à 40 couverts " les terrasses dualgolus resto" côté marne et "la maison dualgolus resto " côté chaussée sont proposées au gré des clients et visiteurs de l'établissement.</p>
                        <a class="btn btn-default" role="button" href="<?=$url;?>menus-et-cartes">Voir nos cartes </a>
                        <a class="btn btn-default" role="button" href="<?=$url;?>contact">Nous contacter </a>
                    </div>

                    <div class="col-md-5 wow zoomIn">
                        <img src="img/pavillon/apropos.jpg" class="img-responsive" alt="Printemps-été dualgolus resto" />
                    </div>
                </div>
            </div>
        </section>

        <section class="about2">
            <div class="container">
                <div class="row ">
                    <div class="col-md-5 wow zoomIn">
                        <img src="img/gallery/5.jpg" class="img-responsive" alt="La carte de Printemps dualgolus resto" />
                    </div>
                    <div class="col-md-7 text-left wow slideInRight">
                        <h2 class="text-left">La carte de Printemps dualgolus resto </h2>
                        <p> La nouvelle carte de Printemps dualgolus resto conjugue les saveurs de saison entre poissons pêchés à la ligne et les viandes directement sélectionnés le jour même par Dominique Stumm à Rungis. Les très demandés desserts évoquent les tendances d'autrefois et d'aujourd'hui consacrant un parcours gourmand ponctué de digestifs et alcools aux origines historiques.</p>
                        <a class="btn btn-default" role="button" href="<?=$url;?>menus-et-cartes">Voir nos cartes </a>
                        <a class="btn btn-default" role="button" href="<?=$url;?>contact">Nous contacter </a>
                    </div>
                </div>
            </div>
        </section>




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
<script>
    new WOW().init();
</script>
</body>

</html>
