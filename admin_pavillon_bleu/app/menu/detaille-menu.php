<?php

require_once '../../configuration/session-verification.php';
require '../../configuration/config.php';
require_once '../../url.php';


$active_acc = "active";
$idc=$_GET['idc'];

try {
    $data= mysqli_query($connect,"SELECT * FROM menu where id_cart = '$idc'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $data1= mysqli_query($connect,"SELECT * FROM detaille where id_cart = '$idc' order by id_menu")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $menuTitre = mysqli_query($connect,"SELECT * FROM cart where id_cart = '$idc'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
    $carteTitre = mysqli_fetch_assoc($menuTitre);
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
        .table thead > tr > th, .table thead > tr > td
        {
            background-color:#343a40;
            color: white;
            text-transform: none;
        }

    </style>
</head>

<body>
<?php
require_once '../header.php';
?>

<div class="kt-breadcrumb">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="<?=$url?>app/index.php">Pavillon bleu</a>
        <a href="<?=$url?>app/menu/cartes.php" class="breadcrumb-item active">liste des cartes</a>
        <span class="breadcrumb-item active"><?=$carteTitre['nom_cart']?></span>
    </nav>
</div><!-- kt-breadcrumb -->

<!-- ##### MAIN PANEL ##### -->
<div class="kt-mainpanel">
    <div class="kt-pagetitle">
        <div class="col-md-8">

            <h3>Nom de la carte :  <?=$carteTitre['nom_cart']?></h3>
        </div>

            <div class="col-md-2">
                <button style="background-color: #345c86; color: #fff;" class="btn  btn-block" data-toggle="modal"  data-target="#modaldemo22"><i class="fa fa-plus mg-r-10"></i> Nouvelle prestation </button>
            </div>
            <div class="col-md-2">
                <button style="background-color: #345c86; color: #fff;" class="btn  btn-block" data-toggle="modal"  data-target="#modaldemo2"><i class="fa fa-plus mg-r-10"></i> Nouveau mets </button>
            </div>

    </div><!-- kt-pagetitle -->


    <div class="kt-pagebody">



        <div class="row">
            <div class="col-md-12">

                <div id="modaldemo1" class="modal fade" >
                    <div class="modal-dialog modal-dialog modal-dialog" role="document" style=" width: 100%;">
                        <div class="modal-content bd-0 tx-14">
                            <div class="modal-header pd-y-20 ">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Modifier le Service</h6>
                                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex">

                                    <form  id="form-modif" method="post" data-parsley-validate  enctype="multipart/form-data">
                                        <div class="d-sm-flex ">
                                            <div class="form-group mg-b-0">

                                                <label>Titre*  : </label>
                                                <input style="width: 350px" id="titre" type="text" name="titre" class="form-control  champ" >
                                                <br>
                                            </div>
                                        </div>
                                        <div class="mg-sm-l-10 mg-t-10 mg-sm-t-25 pd-t-4">
                                            <button  id="envoi" type="submit" class="btn btn-default pd-x-15" name="update_menu">Modifier</button>
                                            <button id="rafraichir" type="reset" class="btn btn-secondary " data-dismiss="modal" aria-label="Close">Annuler</button>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div><!-- modal-dialog -->
                </div><!-- modal modif -->


                <div id="modaldemoo" class="modal fade" >
                    <div class="modal-dialog modal-dialog modal-dialog" role="document" style=" width: 100%;">
                        <div class="modal-content bd-0 tx-14">
                            <div class="modal-header pd-y-20 ">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Modifier le mets</h6>
                                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex">

                                    <form  id="form-modif-detail" method="post" data-parsley-validate  enctype="multipart/form-data">
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
                                                        </figure>

                                                    </div>
                                                </div>
                                                <label>Titre*  : </label>
                                                <input id="titre-detaille" type="text" name="titre" class="form-control  champ" >
                                                <label>Prix  : </label>
                                                <input id="prix" type="text" name="prix" class="form-control  champ" required>

                                                <label>Prestation : </label>
                                                <select class="form-control  champ" name="sous_menu" id="">
                                                    <option value="0">Aucune</option>
                                                    <?php

                                                    foreach ($data as $row) :
                                                        $id = $row['id_menu'];

                                                        $titre = $row['titre'];


                                                        ?>
                                                        <option value="<?=$id?>"><?=$titre?></option>
                                                    <?php endforeach; ?>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="mg-sm-l-10 mg-t-10 mg-sm-t-25 pd-t-4">
                                            <button id="envoi" type="submit" class="btn btn-default pd-x-15" name="update-detaille">Modifier</button>
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
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ajouter un nouveau mets</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex">

                                    <form action="php/add-detaille.php?idc=<?=$idc?>" method="post" data-parsley-validate enctype="multipart/form-data">
                                        <div class="d-sm-flex ">
                                            <div class="form-group mg-b-0">

                                                <div class="row mg-t-20">
                                                    <div class="col-md-12 ">

                                                        <figure class="edit-profile-photo">
                                                            <figcaption>
                                                                <input id="uploadimgcontenu1" class="btn btn-dark" type="file" name="image_apropos_add" style=" display:none"  onchange="imagemin1(this);">
                                                                <a href="" id="upload_linkcontenu1" class="btn btn-dark">Ajouter une image</a>​
                                                            </figcaption>
                                                            <img src="../../img/img12.jpg" name="image" id="img1" class="img-fluid"  style="width: 100%;height: 281px;">

                                                        </figure>

                                                    </div>
                                                </div>
                                                <label>Titre  : </label>
                                                <input id="titre" type="text" name="titre" class="form-control  champ" required>


                                                <label>Prix  : </label>
                                                <input id="prix" type="text" name="prix" class="form-control  champ" required>

                                                <label>Prestation: </label>
                                                <select class="form-control  champ" name="sous_menu" id="">
                                                    <option value="0">Aucune</option>
                                                    <?php

                                                    foreach ($data as $row) :
                                                    $id = $row['id_menu'];

                                                    $titre = $row['titre'];


                                                    ?>
                                                    <option value="<?=$id?>"><?=$titre?></option>
                                                    <?php endforeach; ?>
                                                </select>
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

                <div id="modaldemo22" class="modal fade" >
                    <div class="modal-dialog modal-dialog modal-dialog" role="document" style=" width: 100%;">
                        <div class="modal-content bd-0 tx-14">
                            <div class="modal-header pd-y-20 ">
                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Ajouter un nouveau Carte</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body pd-25">

                                <div class="d-flex col-md-12">

                                    <form action="php/add-menu.php?idc=<?=$idc?>" method="post" data-parsley-validate enctype="multipart/form-data">
                                        <div class="d-sm-flex ">
                                            <div class="form-group mg-b-0 ">
                                                <label>Titre de sous menu  : </label>
                                                <input style="width: 350px" id="titre" type="text" name="titre" class="form-control champ" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button id="envoi" type="submit" class="btn btn-default pd-x-15" name="add_menu">Ajouter</button>
                                            <button id="rafraichir" type="reset" class="btn btn-secondary " data-dismiss="modal" aria-label="Close">Annuler</button>
                                        </div>
                                    </form>


                                </div>
                            </div>

                        </div>
                    </div><!-- modal-dialog -->
                </div><!-- modal d'ajout -->

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




            </div><!-- row -->
        </div>



        <div class="row row-sm mg-t-20">
            <div class="col-xl-9">
                <div class="card bd-gray-300">
                    <div class="card-header bg-gray-100 pd-y-15 pd-x-20">
                        <h6 class="card-title tx-uppercase tx-12 mg-b-0"></h6>
                    </div><!-- card-header -->
                    <div class="table-responsive">
                        <table class="table table-dark mg-b-0 tx-12">
                            <thead class="">
                            <tr class="aa">
                                <th>
                                   Image
                                </th>
                                <th>Titre</th>
                                <th>Prix</th>
                                <th>Prestation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            foreach ($data1 as $row1) :
                            $idd = $row1['id_detaille'];

                            $titred = $row1['titre'];
                            $prix = $row1['prix'];
                            $image = $row1 ['image'];
                            $idsous_menu = $row1['id_menu'];
                                $data3 = mysqli_query($connect,"SELECT titre FROM menu where id_menu= '$idsous_menu'")or die('Erreur SQL!! <br />' . $data . '<br />' . mysqli_error($connect));
                                   $menu=mysqli_fetch_assoc($data3);

                            ?>
                            <tr>
                                <td class="pd-l-20 tx-center">
                                    <img src="../../../images/menus-et-cartes/<?=$image?>" class="wd-50 ht-50 rounded-circle" alt="Image">
                                </td>
                                <td style="width: 480px">
                                    <a  class="tx-inverse tx-14 tx-medium d-block"><?=$titred?></a>
                                </td>
                                <td style="width: 80px" class="tx-15">
                                    <strong><?=$prix?> &nbsp; &euro;</strong>
                                </td>
                                <td style="color: #0d5a66" class="">
                                    <span class="square-8  mg-r-5 "></span> <?=$menu['titre']?>
                                </td>
                                <td style="width: 160px">
                                    <button id="" class="btn  btn-icon btn-dark rounded-5 mg-r-5 mg-b-10"    data-toggle="modal" data-target="#modaldemoo" onclick='modifierplat("<?=$titred?>","<?=$image?>","<?=$prix?>","<?=$idd?>","<?=$idc?>")' data-original-title="voir +">
                                        <div><i class="fa fa-pencil "></i></div>
                                    </button>
                                    <button class="btn  btn-icon btn-dark rounded-5 mg-r-5 mg-b-10" data-toggle="modal" data-tooltip-right="supprimer" tabindex="0" data-target="#modaldemo3" onclick="document.getElementById('supprimer').setAttribute('href', 'php/update-menu.php?idds=<?=$idd?>&idc=<?=$idc?>');">
                                        <div><i class="fa fa-trash"></i></div>
                                    </button>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- table-responsive -->
                    <div class="card-footer tx-12 pd-y-15 bd-gray-300 bd-t">
                    </div><!-- card-footer -->
                </div><!-- card -->



            </div><!-- col-8 -->
            <div class="col-xl-3 mg-t-20">




                <div class="card mg-t-10">
                    <div class="card-header  bg-dark">
                        <span  style="color: white" class="tx-uppercase card-title">les Prestations de <?=$carteTitre['nom_cart']?> </span>
                    </div><!-- card-header -->
                    <div class="list-group list-group-flush">


                        <?php

                        foreach ($data as $row) :
                        $id = $row['id_menu'];

                        $titre = $row['titre'];


                        ?>
                        <div class="list-group-item text-center">
                            <div class="media">

                                <div class="media-body mg-l-10">
                                    <p class="mg-b-0 tx-inverse "><?=$titre?></p>

                                </div><!-- media-body -->
                            </div><!-- media -->
                            <hr width="80%">
                            <button id="" class="btn btn-dark btn-icon rounded-5 mg-r-5 mg-b-10"  data-tooltip-left="modifier" tabindex="0"  data-toggle="modal" data-target="#modaldemo1" onclick='modifier("<?=$titre?>","<?=$id?>","<?=$idc?>")' data-original-title="voir +">
                                <div><i class="fa fa-pencil"></i></div>
                            </button>
                            <button class="btn btn-dark btn-icon rounded-5  mg-r-5 mg-b-10" data-toggle="modal" data-tooltip-right="supprimer" tabindex="0" data-target="#modaldemo3" onclick="document.getElementById('supprimer').setAttribute('href', 'php/update-menu.php?ids=<?=$id?>&idc=<?=$idc?>');">
                                <div><i class="fa fa-trash"></i></div>
                            </button>
                        </div><!-- list-group-item -->
                        <?php endforeach; ?>
                    </div><!-- list-group -->
                    <div class="card-footer">

                    </div><!-- card-footer -->
                </div><!-- card -->


            </div><!-- col-4 -->
        </div>




        <?php
        require_once '../footer.php';
        ?>
    </div><!-- kt-pagebody -->
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
        function modifier(titre,idm,idc) {
            document.getElementById('titre').value = titre;
            $('#modaldemo1').modal({
                backdrop: 'static',
                keyboard: false,
            });
            document.getElementById('form-modif').setAttribute('action', 'php/update-menu.php?idm='+idm+'&idc='+idc);
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



        function modifierplat(titre,image,prix,idd,idc) {
            document.getElementById('titre-detaille').value = titre;
            document.getElementById('prix').value = prix;
            document.getElementById('imgName').value = image;
            document.getElementById('img2').setAttribute('src', '../../../images/menus-et-cartes/' + image);
            
          
            document.getElementById('form-modif-detail').setAttribute('action', 'php/update-menu.php?idde='+idd+'&idc='+idc);
        }
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
