<?php

require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';

//if ($_GET['titre'] == 'titreservice' && isset($_POST['titreServices']))
//{
//    $titreService = htmlspecialchars($_POST['titreServices'],ENT_QUOTES);
//    $descriptionService = htmlspecialchars($_POST['service_contenu'],ENT_QUOTES);
//
//    $log = mysqli_query($connect,"UPDATE accueil SET titre_services='$titreService',description_services='$descriptionService' WHERE id_accueil = 11 ")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));
//}


if(isset($_POST['add_cartes']) && isset($_POST['titre'])) {

    $nowtime = time();
    $titre = htmlspecialchars($_POST['titre'],ENT_QUOTES);


    $allow_ext = array('png', 'jpg', 'jpeg', 'gif');

    $img_apropos = $_FILES['image_apropos_add'];
    $extimgmin = strtolower(substr($img_apropos['name'], -3));
    $extm1 = strtolower(substr($img_apropos['name'], -4));
    if (in_array($extimgmin, $allow_ext) or in_array($extm1, $allow_ext)) {
        $img_apropos = move_uploaded_file($img_apropos['tmp_name'], "../../../../images/menus-et-cartes/" .$nowtime."-".$img_apropos['name']);

    } elseif (empty($img_apropos)) {
        $msge = "Veuillez saisir une image";
    } else {
        $msge = "Votre fichier n'est pas une image";
    }
    $image= $nowtime."-".$_FILES['image_apropos_add']['name'];


    try
    {
        //$log=$pdo->prepare('INSERT INTO annonce (titre,description,prix,annee,modele,kelometrage,image1,image2,image3,image4) value  (:titr,:description,:prix,:annee,:modele,:kelomtrage,:image1,:image1,:image1,:image1)');
        $log=mysqli_query($connect,"INSERT INTO cart(nom_cart, image, activation)value ('$titre','$image',1)")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));

        //$log->execute();

    }
    catch(PDOException  $e)
    {
        print_r($e);
    }
}

header('location:../cartes.php');

?>