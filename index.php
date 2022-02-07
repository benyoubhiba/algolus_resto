
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
    <title><?=$titelAccueil?></title>
    <meta name="author" content="pavillon bleu" >

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionAccueil?>">

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
            <img src="img/preloader.svg" alt="site web Algolus Resto" />
        </div>
    </div>

    <div class="body">

        <!-- Navigation-->
        <?php
        require_once 'header.php';
        ?>

        <!-- Home page-->
        <section class="home">
            <div class="overlay"></div>

            <div class="tittle-block">
                <div class="logo">

                </div>
                <h1>Cuisine traditionnelle <br> et authentique</h1>
                <h2>Le souvenir d'un excellent repas</h2>

            </div>

            <div class="scroll-down">
                <a href="#about">
                    <img src="img/arrow-down.png" alt="down-arrow">
                </a>
            </div>
        </section>

        <div class="main-wrapper">
            <!-- About page-->
            <section class="about" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2"></div>
                            <div class="page-header animated wow zoomInDown col-md-8">
                                <h1>Algolus Resto<small>Le souvenir d'un excellent repas demeure la satisfaction du temps présent et une perpétuelle intention de retourner dans ces lieux.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4 wow zoomIn">
                            <div class="container-fluid">
                                <div class="row">
                                    <img style="width: 100%" src="img/pavillon/apropos.jpg" alt="pavillon bleu apropos">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 wow animated slideInRight">
                            <p>
                            Algolus Resto existe depuis 1895 et c'est un des établissements les plus anciens de la période dite des années folles. C'est le seul restaurant à proximité immédiate de Paris à pouvoir proposer une cuisine traditionnelle et authentique dans un décor bucolique rigoureusement préservé sur les bords de Marne à la Varenne Saint Hilaire dans le Val de Marne.
                            </p>
                            <br>
                            <p>
                                Au printemps-été, une grande terrasse de plus de 100 couverts face à la marne et deux salles d'une capacité de 30 à 40 couverts " les terrasses du Pavillon Bleu" côté marne et "la maison du Pavillon Bleu " côté chaussée sont proposées au gré des clients et visiteurs de l'établissement.
                            </p>
                            <a class="btn btn-default" href="restaurant" role="button">En savoir plus</a>
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
                                <h2>Carte et menus du   Algolus Resto</h2>
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
                                        <img style="height: 100%; width: 100%" src="images/menus-et-cartes/<?= $image?>" class="img-responsive" alt="Carte et menus du Pavillon Bleu" />
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


            <!-- Our features-->
            <section class="features">
                <!-- Gallery -->
                <div class="gallery-content">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 col-sm-6 wow fadeInDownBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/22.jpg">
                                    <img style="height: 250px" src="img/gallery/22.jpg" class="img-responsive" alt="galrery pavillon bleu a La Varenne saint Hilaire" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInRightBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/24.jpg">
                                    <img style="height: 250px" src="img/gallery/24.jpg" class="img-responsive" alt="Restaurant spécialité de poissons à 94" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInLeftBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/9.jpg">
                                    <img style="height: 250px" src="img/gallery/9.jpg" class="img-responsive" alt="Restaurant gastronomique à joinville le pont" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInRightBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/14.jpg">
                                    <img style="height: 250px" src="img/gallery/14.jpg" class="img-responsive" alt="Restaurant bord de marne à champigny sur marne" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInRightBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/11.jpg">
                                    <img style="height: 250px" src="img/gallery/11.jpg" class="img-responsive" alt="Restaurant bord de marne à champigny sur marne" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInUpBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/13.jpg">
                                    <img style="height: 250px" src="img/gallery/13.jpg" class="img-responsive" alt=" Restaurant terrasse à créteil" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 wow fadeInUpBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/10.jpg">
                                    <img style="height: 250px" src="img/gallery/10.jpg" class="img-responsive" alt=" Restaurant terrasse à créteil" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInLeftBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/21.jpg">
                                    <img style="height: 250px" src="img/gallery/21.jpg" class="img-responsive" alt=" galrery pavillon bleu" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInLeftBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/12.jpg">
                                    <img style="height: 250px" src="img/gallery/12.jpg" class="img-responsive" alt="Restaurant gastronomique à joinville le pont" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 col-sm-6 wow fadeInUpBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/27.jpg">
                                    <img style="height: 250px" src="img/gallery/27.jpg" class="img-responsive" alt=" Restaurant terrasse à créteil" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInLeftBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/28.jpg">
                                    <img style="height: 250px" src="img/gallery/28.jpg" class="img-responsive" alt=" galrery pavillon bleu" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 wow fadeInLeftBig">
                                <div class="gallery-item" data-mfp-src="img/gallery/29.jpg">
                                    <img style="height: 250px" src="img/gallery/29.jpg" class="img-responsive" alt="Restaurant gastronomique à joinville le pont" />
                                    <div class="gi-overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="col-md-4"></div>
                        <div style="margin-top: 50px" class="col-md-4">
                            <a href="galerie" type="submit" style="margin-left: 80px" class="btn btn-default btn-lg OT_TableButton" id="js-contact-btn">Voir plus +</a>
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

        <script>
            new WOW().init();
        </script>

</body>

</html>
