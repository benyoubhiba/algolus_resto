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
    <title><?=$titelMentionsLegales?></title>
    <meta name="author" content="pavillon bleu">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionMentionsLegales?>">

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
    <style>
        h2,
        h3,
        h4 {
            text-align: left;
        }
    </style>
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
            <img src="img/preloader.svg" alt="algolus resto" />
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
                        <h2 class="text-uppercase">Restaurant algolus resto
                            Mentions Legales
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-wrapper">
            <div class="flat-row flat-general sidebar-right pad-bottom75px">
                <div class="container pad-top60pxpx pad-bottom120px">
                    <div class="pad-bottom60px">
                        <h2>Mentions Legales</h2>

                    </div>
                    <div class="row">
                        <article class="col-md-12 col-sm-12 col-xs-12  section-padding">
                            <div style="" class="col-md-12 wow zoomInRight ">
                                <h2>www.lepavillonbleusaintmaur.fr</h2>
                                <p><strong>Edit?? par : Restaurant algolus resto</strong></p>

                                <p><strong>Si??ge Social :</strong>
                                    Mr Dominique Stumm 66, promenade des Anglais 94210 La Varenne saint Hilaire
                                    <br>
                                    <strong>T??l :</strong> <a href="tel:00 33 1 48 83 10 56">T??l??phone: 00 33 1 48 83 10
                                        56</a>
                                    <br>
                                    <strong>Siret :</strong> 48156435900026
                                </p>
                                <h3>Site r??alis?? et h??berg?? par wewebcom</h3>

                                <strong>Si??ge social :</strong> 140 rue Gallieni, 92100 Boulogne Billancourt
                                <br>
                                <strong>T??l. :</strong> 01 40 84 90 32
                                <br>
                                <strong>Siret :</strong> 81879685600065


                                <h3>Propri??t?? intellectuelle</h3>

                                <p>L'ensemble de ce site rel??ve des l??gislations Fran??aises et Internationales sur les
                                    droits d'auteur et la propri??t?? intellectuelle. Tous les droits de reproduction sont
                                    r??serv??s pour les textes et les photographies de ce site. La reproduction de tout ou
                                    partie de ce site sur un support ??lectronique ou autre quel qu'il soit, est
                                    formellement interdite sauf autorisation ??crite de l'auteur, conform??ment ??
                                    l'article L 122-4 du Code de la Propri??t?? intellectuelle.</p>

                                <h3>Cr??dit photos</h3>

                                <p>Fotolia - Tous droits r??serv??s.</p>

                                <h3>Liens hypertextes</h3>

                                <p>Les liens hypertextes mis en place dans le cadre du pr??sent site internet en
                                    direction d'autres ressources pr??sentes sur le r??seau Internet, et notamment vers
                                    ses partenaires ont fait l'objet d'une autorisation pr??alable, expresse et ??crite
                                    aupr??s de l'??diteur.</p>

                                <h3>Droit de r??ponse :</h3>

                                <p>Toute personne cit??e sur le site peut faire valoir un droit de r??ponse. Une simple
                                    demande sera adress??e par courrier.</p>

                                <h3>Politique de confidentialit?? :</h3>

                                <p>En aucun cas, les donn??es recueillies sur le site www.lepavillonbleusaintmaur.fr ne
                                    seront c??d??es ou vendues ?? des tiers. Aucune adresse email ne sera transmise ?? des
                                    tiers y compris ?? nos partenaires sauf avec l'accord ??crit des int??ress??s.</p>

                                <h3>Partenaires :</h3>

                                <p>L'ensemble de nos partenaires visibles sur la page partenaires ont un droit de
                                    modification de leur information en effectuant la demande ?? technique@wewebcom.fr

                                </p>
                            </div>
                        </article>

                    </div>


                    <!-- /.row -->
                </div>
            </div><!-- /.blog -->









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