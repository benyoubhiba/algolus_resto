<?php
require_once 'url.php';
include ('admin_pavillon_bleu/configuration/config.php');
require_once 'seo.php';


$idc=$_GET['idc'];

try {
    $data= mysqli_query($connect,"SELECT * FROM menu where id_cart = '$idc' order by id_menu asc ")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $data1= mysqli_query($connect,"SELECT * FROM detaille where id_cart = '$idc' and id_menu = 0")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $menuTitre = mysqli_query($connect,"SELECT * FROM cart where id_cart = '$idc'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $carteTitre = mysqli_fetch_assoc($menuTitre);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $data5= mysqli_query($connect,"SELECT * FROM cart  where activation = 1 and id_cart != '$idc'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
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
    <title><?=$titelmets?><?=$carteTitre['nom_cart']?></title>
    <meta name="author" content="pavillon bleu">

    <!-- SEO -->
    <meta name="description" content="<?=$descriptionmets?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?=$url?>img/favicon.ico">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?=$url?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?=$url?>css/plugin.css">
    <link rel="stylesheet" href="<?=$url?>css/main.css">
    <link href="<?=$url?>css/themes/cyan.css" rel="stylesheet">

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
            <img src="<?=$url?>img/preloader.svg" alt="algolus resto" />
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

                    </div>
                </div>
            </section>
            <!-- menu-->
            <section class="menu space60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow slideInRight">
                                <h1>découvrir votre carte<small> <?=$carteTitre['nom_cart']?></small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu ">
                        <div class="row menu-items3">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <?php

                                foreach ($data as $menu) :
                                    $idm = $menu['id_menu'];
                                    $titrem = $menu['titre'];
                                    $data3 = mysqli_query($connect,"SELECT * FROM detaille where id_menu= '$idm'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                                    $count_detille_in_menu = mysqli_query($connect,"select count(d.id_detaille) from detaille as d ,menu as m WHERE m.id_cart = '$idc' AND d.id_cart = '$idc' and m.id_menu = '$idm' AND d.id_menu = '$idm'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                                    $nbrD = mysqli_fetch_all($count_detille_in_menu);
                                    if ($nbrD[0][0] > 0):
                                    ?>

                                    <div class="menu-item3 col-sm-12 col-xs-12 starter dinner desserts">
                                        <div class="wow slideInLeft">
                                            <h4 style="color: #2d5aae; text-transform: none" ><?=$titrem?> </h4>
                                        </div>
                                    </div>

                                    <?php
                                            endif;
                                    foreach ($data3 as $mets) :
                                        $idd=$mets['id_detaille'];
                                        $titred = $mets['titre'];
                                        $prix = $mets['prix'];
                                        $image = $mets['image'];

                                        ?>



                                        <div class="menu-item3 col-sm-12 col-xs-12 starter dinner desserts">
                                            <img style="height: 60px;width: 60px;" src="<?=$url?>images/menus-et-cartes/<?=$image?>" class="img-responsive wow zoomIn" alt="<?=$titred?>" />
                                            <div style="padding-top: 15px" class="menu-wrapper wow slideInRight">
                                                <h4 style="text-transform: none"><?=$titred?></h4>
                                                <?php
                                                if($prix == 0):
                                                    ?>
                                                    <span class="price">  </span>
                                                <?php else: ?>
                                                    <span class="price"><?=$prix?> &euro;</span>
                                                <?php  endif; ?>
                                                <div class="dotted-bg"></div>

                                            </div>
                                        </div>

                                    <?php

                                    endforeach;
                                endforeach;
                                $da= mysqli_query($connect,"SELECT sum(id_menu) FROM detaille WHERE id_cart = '$idc'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                                $sum = mysqli_fetch_all($da);
                                    $n = mysqli_fetch_all($data1);
                                if(!empty($n[0][0]) && $sum[0][0] != 0 ):

                                    ?>

                                <div class="menu-item3 col-sm-12 col-xs-12 starter dinner desserts">
                                    <div class="">
                                        <h4 style="color: #2d5aae" >_</h4>
                                    </div>
                                </div>
                                <?php
                                endif;
                                foreach ($data1 as $mets1):
                                    $idd=$mets1['id_detaille'];
                                    $titred = $mets1['titre'];
                                    $prix = $mets1['prix'];
                                    $image = $mets1['image'];
                                    ?>

                                <?php

                                if($titred=="Carpaccio de bar mariné de fenouil sauvage et pommes rattes givrées" || $titred=="Baba au vieux rhum, crème de la passion,sorbet noix de coco" || $titred=="Baba au vieux rhum, crème de la passion,sorbet noix de coco" || $titred=="Boeuf maturé 30 jours blonde d'Aquitaine, gratin Dauphinois"){
                                 ?>
                                    <div class="menu-item3 col-sm-12 col-xs-12 starter dinner desserts">
                                        <div class="menu-wrapper wow slideInRight">
                                            <h4 style="text-transform: none">&nbsp;</h4>
                                        </div>
                                    </div>
                                <?php
                                }

                                    ?>
                                    <div class="menu-item3 col-sm-12 col-xs-12 starter dinner desserts">
                                        <img style="height: 60px;width: 60px;"
                                             src="<?= $url ?>images/menus-et-cartes/<?= $image ?>"
                                             class="img-responsive wow zoomIn" alt="<?= $titred ?>"/>
                                        <div style="padding-top: 15px" class="menu-wrapper wow slideInRight">
                                            <h4 style="text-transform: none"><?= $titred ?></h4>
                                            <?php
                                            if ($prix == 0):
                                                ?>
                                                <span class="price">  </span>
                                            <?php else: ?>
                                                <span class="price"><?= $prix ?> &euro;</span>
                                            <?php endif; ?>
                                            <div class="dotted-bg"></div>
                                        </div>
                                    </div>
                                    <?php

                                endforeach;

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- menu-->
            <section class="menu menu2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow slideInRight">
                                <h1>Nos autres cartes</h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu">
                        <div class="row menu-items2">

                            <?php foreach ($data5 as $row) :
                                $id = $row['id_cart'];
                                $image = $row['image'];
                                $titre = $row['nom_cart'];
                                $active = $row['activation'];

                            $da= mysqli_query($connect,"SELECT COUNT(id_cart) FROM detaille WHERE id_cart = '$id'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                            $kk = mysqli_fetch_all($da);

                            if($kk[0][0] != 0):
                                ?>

                                <div class="menu-item2 col-sm-4 col-xs-12 starter dinner desserts wow zoomIn">
                                    <div style="height: 240px" class="menu-info">
                                        <img style="height: 100%; width: 100%" src="<?=$url?>images/menus-et-cartes/<?= $image?>" class="img-responsive" alt="<?=$titre?>" />
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

            <?php
            require_once 'footer.php';
            ?>
        </div>

    </div> 

    <!-- Javascript -->
    <script src="<?=$url?>js/vendor/jquery-1.11.2.min.js"></script>
    <script src="<?=$url?>js/vendor/bootstrap.min.js"></script>
    <script src="<?=$url?>js/vendor/jquery.flexslider-min.js"></script>
    <script src="<?=$url?>js/vendor/spectragram.js"></script>
    <script src="<?=$url?>js/vendor/owl.carousel.min.js"></script>
    <script src="<?=$url?>js/vendor/velocity.min.js"></script>
    <script src="<?=$url?>js/vendor/velocity.ui.min.js"></script>
    <script src="<?=$url?>js/vendor/bootstrap-datepicker.min.js"></script>
    <script src="<?=$url?>js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="<?=$url?>js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="<?=$url?>js/vendor/isotope.pkgd.min.js"></script>
    <script src="<?=$url?>js/vendor/slick.min.js"></script>
    <script src="<?=$url?>js/vendor/wow.min.js"></script>
    <script src="<?=$url?>js/animation.js"></script>
    <script src="<?=$url?>js/vendor/vegas/vegas.min.js"></script>
    <script src="<?=$url?>js/vendor/jquery.mb.YTPlayer.js"></script>
    <script src="<?=$url?>js/vendor/jquery.stellar.js"></script>
    <script src="<?=$url?>js/main.js"></script>
    <script src="<?=$url?>js/vendor/mc/jquery.ketchup.all.min.js"></script>
    <script src="<?=$url?>js/vendor/mc/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
