<?php

/*
 * ------------------------------------
 * Contact Form Configuration
 * ------------------------------------
 */
 
$to    = "lepavillonbleualavarenne@wanadoo.fr"; // <--- Your email ID here
//$to    = "redwaneberah@gmail.com"; // <--- Your email ID here


/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */

    $test     = $_REQUEST["test"];
    if ($test == 0)
    {
        $name     = $_REQUEST["name"];
        $email    = $_REQUEST["email"];
        $subject  = $_REQUEST["subject"];
        $msg      = $_REQUEST["message"];
        if (isset($email) && isset($name) ) {


            $website = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
            $msg     = "Bounjour Admin, <br/> <br/> Vous avez un message de $name ($email)<br/><br/>Message: $msg <br><br> E-mail : $email <br><br> sujet : $subject   <br><br></BT> -- <br>Cet e-mail a été envoyé depuis un formulaire de contact sur $website";

            $mail =  mail($to, $subject, $msg, $headers);
            if($mail)
            {
                echo 'success';
            }

            else
            {
                echo 'failed';
            }
        }
    }
    else
    {
        $name     = $_REQUEST["name"];
        $email    = $_REQUEST["email"];
        $tel = $_REQUEST["tell"];
        $date      = $_REQUEST["startDate"];
        $nbrPerson     = $_REQUEST["PartySize"];
        $time    = $_REQUEST["ResTime"];
        $subject = "reservation de table pour $nbrPerson personne";
        if (isset($email) && isset($name) ) {


            $website = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
            $msg     = "Bounjour Admin, <br/> <br/> Vous avez un message pour la reservation de $name ($email)<br/><br/>Date: $date <br><br> nombre de persson : $nbrPerson <br><br> heurs : $time <br><br> E-mail : $email <br><br> tell : $tel   <br><br> -- <br>Cet e-mail a été envoyé depuis un formulaire de contact sur $website";

            $mail =  mail($to, $subject, $msg, $headers);
            if($mail)
            {
                echo 'success';
            }

            else
            {
                echo 'failed';
            }
        }
    }





?>