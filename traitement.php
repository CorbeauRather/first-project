<?php
    $name = $_GET['name'];
    if (empty($name)) {
        echo 'none <br>';
    } else {
        echo 'name: ' . $name ."<br>";
    }
    $email = $_GET["email"];
    if (empty($email)) {
        echo 'none <br>';
    } else {
        echo 'email: ' . $email ."<br>";
    }

    if (isset($_GET['Like'])) {
        $Like = $_GET["Like"];
    }
    if(isset($Like) && $Like == "Vrai"){
        $Liked = true;
    }
    else {
        $Liked = false;
    } 
    if (empty($Like)) {
        echo 'none <br>';
    } else {
        echo 'Like: ' . $Like ."<br>";
    }
    $Message = $_GET['Message'];
    if (empty($Message)) {
        echo 'none <br>';
    } else {
        echo 'Message: ' . $Message ."<br>";
    }
    $pdo = new PDO("mysql:host=localhost;dbname=corbeaurather", 'CorbeauRather', 'Alexis');
    if (!empty($name)|| !empty($email)||!empty($Liked)||!empty($Message)){
        $rerequest = $pdo->query("INSERT INTO `formulaire`(`name`, `email`, `Liked`, `Message`) VALUES ('$name','$email','$Liked','$Message') ");
    }
?>