<?php
    require_once '../../configuration/config.php';

        if(isset($_GET['idA'])) {
            $id_a=$_GET['idA'];

            $activation=mysqli_query($connect,"select * from avis where id='$id_a'");
            
            $row= mysqli_fetch_assoc($activation);
            
            $testActivation = $row["validation"];
            if($testActivation=="false")
            {       
                mysqli_query($connect,"update avis set validation = 'true' where id= '$id_a'");
                header('Location: avis-en-attente.php');
            }
            if($testActivation=="true")
            {       
                mysqli_query($connect,"update avis set validation = 'false' where id = '$id_a'");
                header('Location: avis-valides.php');
            }

        }

        if(isset($_GET['idS'])){
            $id_a=$_GET['idS'];

            

            $activation=mysqli_query($connect,"select * from avis where id='$id_a'");     
            $row= mysqli_fetch_assoc($activation);      
            $testActivation = $row["validation"];
            mysqli_query($connect,"delete from avis where id='$id_a'");
            if($testActivation=="false")
            {
                header('Location: avis-en-attente.php');
            }
            if($testActivation=="true"){
                header('Location: avis-valides.php');
            }
        }
?>