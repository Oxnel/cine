<?php
session_start();
$connection=mysqli_connect("localhost","root","","cinema");
if(!$connection){
    echo"";
}
$time= date("d/m/Y H:i:s");
date_default_timezone_set('Etc/Gmt-1');
$nom = mysqli_real_escape_string($connection, $_POST['nom']);
$mail = mysqli_real_escape_string($connection, $_POST['mail']);
$tel = mysqli_real_escape_string($connection, $_POST['tel']);
$nai = mysqli_real_escape_string($connection, $_POST['nai']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$prenom = mysqli_real_escape_string($connection, $_POST['prenom']);
$user_id=rand(1,1000);

$result=mysqli_query($connection,"SELECT * FROM user WHERE mail='$mail'");
if (mysqli_num_rows($result) > 0) {
    echo" Cet email existe déja. veuillez vous connecter ou choisir un autre email";
}else{
    if (isset($_FILES['img'])) {
        $file_name = $_FILES['img']['name'];
        $file_type = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_type, "image_user/". $file_name);
        $insert = "INSERT INTO user(nom, mail, tel, naissance, mdp,prenom,date,img,id_user) VAlUES('$nom', '$mail', '$tel', '$nai', '$password','$prenom','$time','$file_name','$user_id')";
        $result = mysqli_query($connection, $insert);
    // $sqlite=" SELECT * FROM user WHERE mdp='$password";
    // $cle=mysqli_query($connection, $sqlite);
    // $row1=mysqli_fetch_assoc($cle);
    $_SESSION['element']= $user_id;
    echo"ok";

    } 
}