<?php

require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';





if(isset($_POST['add_menu']) && isset($_GET['idc']) && isset($_POST['titre'])) {
    
    $titre = htmlspecialchars($_POST['titre'],ENT_QUOTES);
    $idc = $_GET['idc'];
    try
    {
        $log=mysqli_query($connect,"INSERT INTO menu(titre, id_cart) value ('$titre','$idc')")or die('Erreur SQL!! <br />' . $log . '<br />' . mysqli_error($connect));
       
    }
    catch(PDOException  $e)
    {
        print_r($e);
    }
}

header('location:../detaille-menu.php?idc='.$idc);

?>