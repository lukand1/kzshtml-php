<?php

    if (isset($_POST['fullName'])&&isset($_POST['email'])) {
        
        $sub->name = $_POST['fullName'];
        $sub->email = $_POST['email'];

        $subJSON = json_encode($sub);

        // Upis u JSON
        $pok = fopen('sub.json', a);
        fwrite($pok, $subJSON);
        fclose($pok);

        include "connection.php";
        $sql = "INSERT INTO zadatak3 (fullName, email) VALUES ('".$sub->name."', '".$sub->email."')";
        
        if (mysqli_query($db, $sql)){
            echo "done";
        } else {
            echo "fail" . mysql_error();
        }
    } else {

        echo "Nisu prosleđeni parametri!";
    }
    mysqli_close($db);
        
?>