<?php

require_once '../../configuration/session-verification.php';
require '../../configuration/config.php';
require_once '../../url.php';

$active_user='active';

if(isset($_POST['ajout_user'])) {



    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['login']) AND !empty($_POST['password']) AND !empty($_POST['profil'])) {
        $nom=trim(htmlspecialchars($_POST['nom'], ENT_QUOTES));
        $prenom =trim(htmlspecialchars($_POST['prenom'], ENT_QUOTES));
        $email =trim(htmlspecialchars($_POST['email'], ENT_QUOTES));
        $login = trim(htmlspecialchars($_POST['login'], ENT_QUOTES));
        $motpasse = md5($_POST['password']);
        $profil =trim(htmlspecialchars($_POST['profil'], ENT_QUOTES));

        $sql = "insert into utilisateurs (nom, prenom, mail, login, mot_passe, profil) values ('$nom', '$prenom', '$email', '$login', '$motpasse', '$profil')";
        $req = mysqli_query($connect, $sql) or die('Erreur SQL!! <br />' . $sql . '<br />' . mysqli_error($connect));

        $message = "  Ajout réussi";
        header('Location: liste-utilisateurs.php');


    } else {
        $erreur = '  Veuillez remplir tous les champs';

    }

}

?>

<!DOCTYPE html>
<html lang="en">
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


    <title>Le Pavillon Bleu : Gestion des utilisateurs</title>

    <!-- vendor css -->
    <link href="<?=$url?>lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=$url?>lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="<?=$url?>lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="<?=$url?>css/katniss.css">
</head>

<body>
<?php
 require_once '../header.php';
?>

<div class="kt-breadcrumb">
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="<?=$url?>app/index.php">Le Pavillon Bleu</a>
        <span class="breadcrumb-item active">Ajouter un utilisateur</span>
    </nav>
</div><!-- kt-breadcrumb -->

<!-- ##### MAIN PANEL ##### -->
<div class="kt-mainpanel">
    <div class="kt-pagetitle">
        <h5>Ajouter un utilisateur</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">

        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-xl-6">
                    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                        <h6 class="card-body-title">Ajouter un nouvel utilisateur</h6>
                        <form action="" method="post">
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Nom: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nom" class="form-control" placeholder="Saisir nom">
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Prénom: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input  type="text" name="prenom" class="form-control" placeholder="Saisir prénom">
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="email" class="form-control" placeholder="saisir l'adresse mail">
                            </div>
                        </div>
                        <div  class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Rôle: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                                <select name="profil" class="form-control select2" data-placeholder="Attribuer un profil">
                                    <option value="admin">admin</option>
                                    <option value="éditeur">éditeur</option>
                                </select>
                            </div>

                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Login: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="login" class="form-control" placeholder="Attribuer un login">
                            </div>
                        </div>
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Mot de passe: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="password" name="password" class="form-control" placeholder="attribuer un mot de passe">
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" name="ajout_user" class="btn btn-default mg-r-5">Ajouter</button>
                            <button type="reset" class="btn btn-secondary">Anuuler</button>
                        </div><!-- form-layout-footer -->
                        </form>

                        <?php
                        if(isset($erreur)) {
                            ?>
                            <div class="alert alert-danger mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-close alert-icon tx-24"></i>
                                    <strong class="d-block d-sm-inline-block-force">Erreur!  </strong>
                                    <?php
                                    echo $erreur;
                                    ?>                    </div><!-- d-flex -->

                            </div><!-- alert -->
                            <?php
                        }elseif (isset($message)) {
                            ?>
                            <div class="alert alert-success mg-b-0" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex align-items-center justify-content-start">
                                    <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
                                    <strong class="d-block d-sm-inline-block-force"></strong>
                                    <?php
                                    echo $message;
                                    ?>
                                </div><!-- d-flex -->

                            </div><!-- alert -->
                            <?php
                        }
                        ?>
                    </div><!-- card -->
                </div><!-- col-6 -->


        </div><!-- row -->

    </div><!-- kt-pagebody -->
    <?php
    require_once '../footer.php';
    ?>
</div><!-- kt-mainpanel -->

<script src="<?=$url?>lib/jquery/jquery.js"></script>
<script src="<?=$url?>lib/popper.js/popper.js"></script>
<script src="<?=$url?>lib/bootstrap/bootstrap.js"></script>
<script src="<?=$url?>lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?=$url?>lib/moment/moment.js"></script>

<script src="<?=$url?>js/katniss.js"></script>

</body>
</html>
