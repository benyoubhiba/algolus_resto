<?php
 require_once '../../../url.php';
require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';


if(isset($_GET['idc']) && isset($_POST['add_cartes']) && isset($_POST['titre'])) {

    $nowtime = time();
    $titre = htmlspecialchars($_POST['titre'],ENT_QUOTES);
    $prix = $_POST['prix'];
    $sous_menu = $_POST['sous_menu'];
    $idc=$_GET['idc'];
    $allow_ext = array('png', 'jpg', 'jpeg', 'gif');

    $img_apropos = $_FILES['image_apropos_add'];
    $extimgmin = strtolower(substr($img_apropos['name'], -3));
    $extm1 = strtolower(substr($img_apropos['name'], -4));
    if (in_array($extimgmin, $allow_ext) or in_array($extm1, $allow_ext)) {
        $img_apropos = move_uploaded_file($img_apropos['tmp_name'], "../../../../images/menus-et-cartes/" .$nowtime."-".$img_apropos['name']);
        $image= $nowtime."-".$_FILES['image_apropos_add']['name'];
    } elseif (empty($img_apropos)) {
        $msge = "Veuillez saisir une image";
        $image= "avatar.jpeg";
    } else {
        $msge = "Votre fichier n'est pas une image";
        $image= "avatar.png";
    }



    try
    {
        $log=mysqli_query($connect,"INSERT INTO detaille(titre, prix, image, id_cart, id_menu) value ('$titre','$prix','$image','$idc','$sous_menu')")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));
        //$log->execute();

    }
    catch(PDOException  $e)
    {
        print_r($e);
    }
}
header('location:../detaille-menu.php?idc='.$idc);

?>