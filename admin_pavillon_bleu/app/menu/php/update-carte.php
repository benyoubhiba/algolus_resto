<?php
/**
 * Created by PhpStorm.
 * User: RADWANE
 * Date: 08/02/2019
 * Time: 12:42
 */

require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';

if(isset($_POST['update_carte']) && isset($_GET['id'])) {

    $idcarte = $_GET['id'];
    $nowtime = time();
    $titre =  htmlspecialchars($_POST['titre'],ENT_QUOTES);
    $imgName = $_POST['imgName'];

    $allow_ext = array('png', 'jpg', 'jpeg', 'gif');

    $img_apropos = $_FILES['image_apropos_add'];
    $extimgmin = strtolower(substr($img_apropos['name'], -3));
    $extm1 = strtolower(substr($img_apropos['name'], -4));
    if (in_array($extimgmin, $allow_ext) or in_array($extm1, $allow_ext)) {
        $img_apropos = move_uploaded_file($img_apropos['tmp_name'], "../../../../images/menus-et-cartes/".$nowtime."-".$img_apropos['name']);
    } elseif (empty($img_apropos)) {
        $msge = "Veuillez saisir une image";
    } else {
        $msge = "Votre fichier n'est pas une image";
    }
    $image= $_FILES['image_apropos_add']['name'];




    if (empty($image))
    {
        $image = $imgName;
    }
    else
    {
        $image= $nowtime."-".$_FILES['image_apropos_add']['name'];
        unlink("../../../../images/menus-et-cartes/{$imgName}");
    }


    try
    {
        //$log=$pdo->prepare('INSERT INTO annonce (titre,description,prix,annee,modele,kelometrage,image1,image2,image3,image4) value  (:titr,:description,:prix,:annee,:modele,:kelomtrage,:image1,:image1,:image1,:image1)');
        $log = mysqli_query($connect,"UPDATE cart SET nom_cart='$titre',image='$image'  WHERE id_cart = '$idcarte'")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));

    }
    catch(PDOException  $e)
    {
        print_r($e);
    }
}

header('location:../cartes.php');

?>