<?php
define("DB_HOST" , "localhosT");
define("DB_LOGIN", "root");
define("DB_PASS", "");
define("DB_BDD" , "bd_pavillon-bleu");

//define("DB_HOST" , "lepavillbu1.mysql.db");
//define("DB_LOGIN", "lepavillbu1");
//define("DB_PASS", "Wewebcom2016");
//define("DB_BDD" , "lepavillbu1");



$connect= mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS);
$bdd= mysqli_select_db($connect,DB_BDD);
mysqli_set_charset($connect, "utf8");


