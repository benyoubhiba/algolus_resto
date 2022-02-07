<?php

require_once '../../configuration/session-verification.php';
require '../../configuration/config.php';
require_once '../../url.php';


$active_acc = "active";


try {
    $data= mysqli_query($connect,"SELECT * FROM cart ")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Le Pavillon Bleu : Section préstations</title>

    <!-- vendor css -->
    <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="../../css/katniss.css">
    <link href="../../lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="styleCartes.css" rel="stylesheet">



    <style>


    </style>
</head>

<body>
<?php
require_once '../header.php';
?>

<div class="kt-breadcrumb">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="<?=$url?>app/index.php">Le Pavillon Bleu</a>
        <span class="breadcrumb-item active">liste des cartes</span>

    </nav>
</div><!-- kt-breadcrumb -->

<!-- ##### MAIN PANEL ##### -->
<div class="kt-mainpanel">
    <div class="kt-pagetitle">
        <div class="col-md-9">
            <h5>liste des cartes</h5>
        </div>

        <div class="col-md-3">
            <button class="btn btn-primary btn-block" data-toggle="modal"  data-target="#modaldemo2"><i class="fa fa-plus mg-r-10"></i> Nouvelle carte</button>
        </div>
    </div><!-- kt-pagetitle -->


    <div class="kt-pagebody">

        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <?php foreach ($data as $row) :
                        $id = $row['id_cart'];
                        $image = $row['image'];
                        $titre = $row['nom_cart'];
                        $active = $row['activation'];

                        ?>

                        <div class="card mg-r-15 mg-l-50 mg-b-40 col-md-3 d-block text-center <?php echo ($active == 0 )?'redborder' : 'redborder1';  ?> ">

                            <div class="mg-t-10">
                                <img style="height: 250px;" class="card-img-top img-fluid" src="../../../images/menus-et-cartes/<?=$image?>" alt="Image">
                            </div>
                            <div style="">
                                <div style="">
                                    <div class="mg-t-20">
                                        <h6 class="mg-b-3"><a href="" class="tx-dark"><?php echo $titre?></a></h6>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center">
                                <hr>
                                <input type="hidden" value="<?php echo$id?>" id="fffff">
                                <button id="" class="btn btn-primary btn-icon rounded-circle mg-r-5 mg-b-10"  data-tooltip-left="Modifier" tabindex="0"  data-toggle="modal" data-target="#modaldemo1" onclick='modifier("<?=$titre?>","<?=$image?>","<?=$id?>")' data-original-title="voir +">
                                    <div><i class="fa fa-pencil"></i></div>
                                </button>
                                <button class="btn btn-primary btn-icon rounded-circle mg-r-5 mg-b-10" data-toggle="modal" data-tooltip-top="Supprimer" tabindex="0" data-target="#modaldemo3" onclick="document.getElementById('supprimer').setAttribute('href', 'php/delete-carte.php?ids=<?=$id?>');">
                                    <div><i class="fa fa-trash"></i></div>
                                </button>
                                <?php if($active == 1): ?>
                                    <button href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10" data-tooltip-bottom="Désactiver" tabindex="0" data-toggle="modal" data-target="#modaldemo4" onclick="document.getElementById('desactiver').setAttribute('href', 'php/delete-carte.php?idd=<?=$id?>')">
                                        <div><i class="fa fa-close"></i></div>
                                    </button>
                                <?php elseif($active == 0): ?>
                                    <button href="#" class="btn btn-success btn-icon rounded-circle mg-r-5 mg-b-10" data-tooltip-bottom="Activer" tabindex="0" data-toggle="modal" data-target="#modaldemo5" onclick="document.getElementById('activerser').setAttribute('href', 'php/delete-carte.php?ida=<?=$id?>')">
                                        <div><i class="fa fa-check"></i></div>
                                    </button>
                                <?php endif;?>
                                <a href="detaille-menu.php?idc=<?=$id?>" class="btn btn-primary btn-icon rounded-circle mg-r-5 mg-b-10"  data-tooltip-right="Detail" tabindex="0">
                                    <div><i class="fa fa-navicon"></i></div>
                                </a>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
                <div id="modaldemo1" class="modal fade" >
                    <div class="modal-dialog modal-dialog modal-dialog" role="document" style=" width: 100%;">
                        <div class="modal-content bd-0 tx-14">
                            <div class="modal-header pd-y-20 ">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Modifier la carte</h6>
                                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex">

                                    <form  id="form-modif" method="post" data-parsley-validate  enctype="multipart/form-data">
                                        <div class="d-sm-flex ">
                                            <div class="form-group mg-b-0">

                                                <div class="row mg-t-20">
                                                    <div class="col-md-12 ">

                                                        <figure class="edit-profile-photo">
                                                            <figcaption>
                                                                <input id="uploadimgcontenu" class="btn btn-dark" type="file" name="image_apropos_add" style=" display:none"  onchange="imagemin(this);">
                                                                <a href="" id="upload_linkcontenu" class="btn btn-dark">Modifier l'image</a>​
                                                            </figcaption>
                                                            <img  name="image" id="img2" class="img-fluid"  style="width: 100%;height: 281px;">
                                                            <input type="text" name="imgName" id="imgName" hidden>
<!--                                                            <p>Pour une meilleure présentation de votre site web, il est préférable que les dimensions de vos images soient de 370x265-->
<!--                                                                <br> et ne dépasse pas 2 Mo</p>-->
                                                        </figure>

                                                    </div>
                                                </div>
                                                <label>Nom de la carte*  : </label>
                                                <input id="titre" type="text" name="titre" class="form-control  champ" >
                                                <br>
                                            </div>
                                        </div>
                                        <div class="mg-sm-l-10 mg-t-10 mg-sm-t-25 pd-t-4">
                                            <button id="envoi" type="submit" class="btn btn-default pd-x-15" name="update_carte">Modifier</button>
                                            <button id="rafraichir" type="reset" class="btn btn-secondary " data-dismiss="modal" aria-label="Close">Annuler</button>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div><!-- modal-dialog -->
                </div><!-- modal modif -->

                <div id="modaldemo2" class="modal fade" >
                    <div class="modal-dialog modal-dialog modal-dialog" role="document" style=" width: 100%;">
                        <div class="modal-content bd-0 tx-14">
                            <div class="modal-header pd-y-20 ">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ajouter une nouvelle carte</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex">

                                    <form action="php/add-carte.php" method="post" data-parsley-validate enctype="multipart/form-data">
                                        <div class="d-sm-flex ">
                                            <div class="form-group mg-b-0">

                                                <div class="row mg-t-20">
                                                    <div class="col-md-12 ">

                                                        <figure class="edit-profile-photo">
                                                            <figcaption>
                                                                <input id="uploadimgcontenu1" class="btn btn-dark" type="file" name="image_apropos_add" style=" display:none" required  onchange="imagemin1(this);">
                                                                <a href="" id="upload_linkcontenu1" class="btn btn-dark">Ajouter une image</a>​
                                                            </figcaption>
                                                            <img src="../../img/img12.jpg" name="image" id="img1" class="img-fluid"  style="width: 100%;height: 281px;">

                                                        </figure>

                                                    </div>
                                                </div>
                                                <label>Nom de la carte : </label>
                                                <input id="titre" type="text" name="titre" class="form-control  champ" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button id="envoi" type="submit" class="btn btn-default pd-x-15" name="add_cartes">Ajouter</button>
                                            <button id="rafraichir" type="reset" class="btn btn-secondary " data-dismiss="modal" aria-label="Close">Annuler</button>

                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div><!-- modal-dialog -->
                </div><!-- modal d'ajout -->

            </div><!-- row -->

        </div><!-- kt-pagebody -->


        <!--    modale de supresion-->
        <div id="modaldemo3" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Supprimer</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body pd-25">
                        <h4 class="text-center">
                            Êtes-vous sûr de vouloir supprimer cette préstation?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <a type="button" href="" id="supprimer" class="btn btn-default pd-x-20">Supprimer</a>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>


        <!--modale de desactivation-->
        <div id="modaldemo4" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">désactiver</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body pd-25">
                        <h4 class="text-center">
                            Êtes-vous sûr de vouloir désactiver cette Carte?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <a type="button" href="" id="desactiver" class="btn btn-default pd-x-20">Désactiver</a>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>



        <div id="modaldemo5" class="modal fade">
            <div class="modal-dialog modal-dialog-vertical-center" role="document">
                <div class="modal-content bd-0 tx-14">
                    <div class="modal-header pd-y-20 pd-x-25">
                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Activer</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body pd-25">
                        <h4 class="text-center">
                            Êtes-vous sûr de vouloir activer cette Carte?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <a type="button" href="" id="activerser" class="btn btn-default pd-x-20">Activer</a>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>




        <?php
        require_once '../footer.php';
        ?>
    </div><!-- kt-mainpanel -->

    <script src="../../lib/jquery/jquery.js"></script>
    <script src="../../lib/popper.js/popper.js"></script>
    <script src="../../lib/bootstrap/bootstrap.js"></script>
    <script src="../../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../lib/moment/moment.js"></script>

    <script src="../../js/katniss.js"></script>

    <script src="../../lib/summernote/summernote-bs4.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

    <script>
        $(function(){
            'use strict';
            // Summernote editor
            $('#summernote').summernote({
                tooltip: false
            });

        });

    </script>


    <script>$(function(){
            $("#upload_linkcontenu").on('click', function(e){
                e.preventDefault();
                $("#uploadimgcontenu:hidden").trigger('click');
            });
        });</script>

    <script type="text/javascript">

        function imagemin(input) {

            if (input.files && input.files[0]){

                var fileimg = new FileReader();
                fileimg.onload=function (e) {
                    $('#img2').attr('src', e.target.result);
                };
                fileimg.readAsDataURL(input.files[0])

            }

        }
    </script>


    <script>$(function(){
            $("#upload_linkcontenu1").on('click', function(e){
                e.preventDefault();
                $("#uploadimgcontenu1:hidden").trigger('click');
            });
        });</script>

    <script type="text/javascript">

        function imagemin1(input) {

            if (input.files && input.files[0]){

                var fileimg = new FileReader();
                fileimg.onload=function (e) {
                    $('#img1').attr('src', e.target.result);
                };
                fileimg.readAsDataURL(input.files[0])

            }

        }


    </script>





    <script>
        function modifier(titre,image,id) {
            document.getElementById('titre').value = titre;
            document.getElementById('imgName').value = image;
            document.getElementById('img2').setAttribute('src', '../../../images/menus-et-cartes/' + image);
            $('#modaldemo1').modal({
                backdrop: 'static',
                keyboard: false,
            });
            document.getElementById('form-modif').setAttribute('action', 'php/update-carte.php?id='+id);
        }

    </script>

    <script>
        $(function(){
            'use strict';

            $('#rafraichir').click(function () {
                window.location.reload();
            });

            $('#close').click(function () {
                window.location.reload();
            });



        });
    </script>


    <script>
        ClassicEditor
            .create(document.querySelector('#editor')).
        catch(error => {
            console.error(error);
        });
    </script>


    <script>
        $(function(){
            'use strict';

            // Initialize tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Initialize popover
            $('[data-popover-color="default"]').popover();

            // By default, Bootstrap doesn't auto close popover after appearing in the page
            // resulting other popover overlap each other. Doing this will auto dismiss a popover
            // when clicking anywhere outside of it
            $(document).on('click', function (e) {
                $('[data-toggle="popover"],[data-original-title]').each(function () {
                    //the 'is' for buttons that trigger popups
                    //the 'has' for icons within a button that triggers a popup
                    if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                        (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
                    }

                });
            });
        });
    </script>

</body>
</html>
