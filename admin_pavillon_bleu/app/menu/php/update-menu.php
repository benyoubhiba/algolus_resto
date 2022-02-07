<?php
/**
 * Created by PhpStorm.
 * User: RADWANE
 * Date: 08/02/2019
 * Time: 12:42
 */

require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';

$idc=$_GET['idc'];
if(isset($_POST['update_menu']) && isset($_GET['idm'])) {


    $id_menu= $_GET['idm'];
   
    $titre =  htmlspecialchars($_POST['titre'],ENT_QUOTES);

    try
    {
        $log = mysqli_query($connect,"UPDATE menu SET titre='$titre'  WHERE id_menu = '$id_menu'")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));

    }
    catch(PDOException  $e)
    {
        print_r($e);
    }


}

if(isset($_GET['ids'])){
    $id_s=$_GET['ids'];


//        $log = mysqli_query($connect,"UPDATE detaille SET id_menu='0'  WHERE id_menu = '$id_s'")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));

        if ( $log = mysqli_query($connect,"UPDATE detaille SET id_menu='0'  WHERE id_menu = '$id_s'")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect)))
        mysqli_query($connect,"delete from menu where id_menu='$id_s'");
}


if(isset($_GET['idds'])){
    $id_s=$_GET['idds'];
    mysqli_query($connect,"delete from detaille where id_detaille='$id_s'");
}




if(isset($_POST['update-detaille']) && isset($_GET['idde'])) {


    $id_detail= $_GET['idde'];
    $titre =  htmlspecialchars($_POST['titre'],ENT_QUOTES);
    $prix =$_POST['prix'];
    $sous_menu = $_POST['sous_menu'];
    $nowtime = time();
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
        $log = mysqli_query($connect,"UPDATE detaille SET titre ='$titre',image = '$image',prix = '$prix',id_menu = '$sous_menu' WHERE id_detaille = '$id_detail'")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));

    }
    catch(PDOException  $e)
    {
        print_r($e);
    }


}



header('location:../detaille-menu.php?idc='.$idc);

?>