<?php
require_once '../../configuration/session-verification.php';
require_once '../../configuration/config.php';

require_once '../../url.php';

$active_tem='active';


$sql2 = "select * from avis where validation='false' order by id DESC";
$result2=mysqli_query($connect, $sql2);
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


    <title>Gestion des avis en attente</title>

    <!-- vendor css -->
    <link href="<?=$url?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$url?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?=$url?>lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="<?=$url?>css/styleAvis.css">
    <link rel="stylesheet" href="<?=$url?>css/katniss.css">
    
  </head>

  <body>

  <?php
    require_once '../header.php';
  ?>

    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="<?=$url?>app/index.php">GC Terrasses</a>
        <span class="breadcrumb-item active">Gestion des avis</span>
      </nav>
    </div><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <div class="kt-pagetitle">
        <h5>Liste des avis en attente</h5>
      </div><!-- kt-pagetitle -->

      <div class="kt-pagebody">

        <div class="content-wrapper">

            <div class="list-group mailbox-list-group">
              <!-- loop starts here -->
                <?php

                while($row= mysqli_fetch_assoc($result2)) {
                    $Id= $row["id"];
                    $n = $row["visiteur"];
                    $d = $row["date"];
                    $a = $row["avis"];
                    $e = $row["Etoiles"];
                    $email = $row["email"];
                    $i=1;

                    ?>


                    <div class='list-group-item media align-items-center unread'>
                        <div class='media-body mg-l-20'>
                            <div class='media-body-head'>
                                <div class='row' id="valign" style='width:100%'>
                                    <div class='col-md-8'>
                                        <div class='col-md-12'>
                                            <p>
                                                <?php
                                                for($i=1;$i<=$e;$i++)
                                                {
                                                    echo '<span id="etoileCochee"> </span>';
                                                }

                                                for($i=$e;$i<5;$i++)
                                                {
                                                    echo '<span id="etoileNonCochee"> </span>';
                                                }
                                                ?>

                                            </p>
                                        </div>
                                        <div>
                                            <h6 class='tx-inverse tx-13 mg-b-2'><?=$n?></h6>
                                            <span class='d-block tx-12'><?=$d?></span>
                                            <p>
                                                <?=$email?>
                                            </p>
                                            <p>
                                                <?=$a?>
                                            </p>
                                        </div>
                                    </div>
                          <div class='col-md-4 text-center gestion-avis'>
                            <a href='' class="btn btn-primary" onclick="document.getElementById('valider').setAttribute('href','activation-suppression.php?idA=<?php echo $Id?>')"
                                data-toggle="modal" data-target="#modaldemo1">
                                Valider
                            </a>


                            <a href='' class="btn btn-danger" onclick="document.getElementById('supprimer').setAttribute('href','activation-suppression.php?idS=<?php echo $Id?>')"
                                data-toggle="modal" data-target="#modaldemo2">
                                Supprimer
                            </a>
                            
                          </div>
                        </div>

                        </div>
                      </div>
                    </div>                   
              <?php
                }
              ?>

            </div><!-- list-group -->
        </div><!-- content-wrapper -->

      </div><!-- kt-pagebody -->
        <?php
        require_once '../footer.php';
        ?>
    </div><!-- kt-mainpanel -->


    <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Valider l'avis</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">
              Voulez-vous valider cet avis?
            </h4>
          </div>
          <div class="modal-footer">
            <a href="" type="button" id="valider" class="btn btn-default pd-x-20">Valider</a>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Supprimer l'avis</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">
              Voulez-vous supprimer cet avis?
            </h4>
          </div>
          <div class="modal-footer">
            <a href="" type="button" id="supprimer" class="btn btn-default pd-x-20">Supprimer</a>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      </div>
    </div>

    <script src="<?=$url?>lib/jquery/jquery.js"></script>
    <script src="<?=$url?>lib/popper.js/popper.js"></script>
    <script src="<?=$url?>lib/bootstrap/bootstrap.js"></script>
    <script src="<?=$url?>lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?=$url?>lib/moment/moment.js"></script>

    <script src="<?=$url?>js/katniss.js"></script>
    <script>
      $(function() {
        'use strict';

        $('#btnMailboxLeft').on('click', function() {
          $('body').toggleClass('content-show-left');
        });
      });
    </script>
  </body>
</html>
