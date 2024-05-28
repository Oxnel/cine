<?php
session_start();
require 'config.php';


if(!isset($_SESSION['id'])){
    header("location:Formulaire.html");
}else{
    $query=mysqli_query($connection,"SELECT * FROM user WHERE id={$_SESSION['id']}");
    $row=mysqli_fetch_assoc($query);
    $rep=$row['nom'];
    echo "Bonjour $rep";
}



?>