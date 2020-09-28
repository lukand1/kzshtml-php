<?php
    $mysql_server = "localhost";
    $mysql_user = "luka";
    $mysql_password = "luka";
    $mysql_db = "zadatak3";

    if (!$db=mysqli_connect($mysql_server, $mysql_user, $mysql_password)) {
        die ("<p>Spajanje na mysql server je bilo neuspešno</p>");
    }
    if (!mysqli_select_db($db, $mysql_db)){
        echo $mysql_db;
        die ("<p>Greška pri odabiru baze</p>");
    } else {
        mysqli_query($db,"SET NAMES utf8");
        mysqli_query($db,"SET CHARACTER SET utf8");
        mysqli_query($db,"SET COLLATION_CONNECTION='utf8_unicode_ci'");
    }
?>