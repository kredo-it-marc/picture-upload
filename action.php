<?php

    include 'classes/sql.php';

    $s = new SQL();

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    if(isset($_POST['upload'])){
        $pic = $_FILES['pic']['name'];
        $user = $_POST["user"];

        $target_dir = "upload/"; //folder in your computer where you will place the picture
        $target_file = $target_dir . basename($_FILES["pic"]["name"]);

        $ans = $s->insertToTable($user, $pic);

        if($ans == 1){
            // Upload file
            move_uploaded_file($_FILES['pic']['tmp_name'],$target_file);
            //move_uploaded_file ~~~ transfers the picture from one location
            // to another location
            header("Location: index.html");
        }else{
            echo "Error";
        }
        
    }
?>