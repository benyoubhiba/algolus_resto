<?php

require_once '../../../configuration/session-verification.php';
require '../../../configuration/config.php';

if(isset($_GET['ids'])){
    $id_s=$_GET['ids'];

    $suppression=mysqli_query($connect,"select * from cart where id_cart='$id_s'");
    $row= mysqli_fetch_assoc($suppression);
    $img = "../../../../images/menus-et-cartes/".$row["image"];
    unlink($img);
    mysqli_query($connect,"delete from cart where id_cart='$id_s'");
//    header('Location: ../cartes.php');
}

if(isset($_GET['idd'])) {
    $idd=$_GET['idd'];

    mysqli_query($connect,"update cart set activation = 0 where id_cart = '$idd'");
//    header('Location: ../cartes.php');

}
if(isset($_GET['ida'])) {
    $ida=$_GET['ida'];

    mysqli_query($connect,"update cart set activation = 1 where id_cart = '$ida'");


}

header('Location: ../cartes.php');
?>
