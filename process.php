<?php
    $mysqli = new mysqli('localhost', 'root', '', 'kiemtra') or die(mysqli_error($mysqli));

    // Add profile when click on button "Thêm"
    if(isset($_POST['save'])){
        $name       = $_POST['name'];
        $gender     = $_POST['gender'];
        $birthday   = $_POST['birthday'];
        $hometown   = $_POST['hometown'];
        $desc       = $_POST['desc'];

        $mysqli->query("INSERT INTO tbthongtin VALUES('', '$name', '$gender', '$birthday', '$hometown', '$desc')")
            or die($mysqli->error);
    }    
?>