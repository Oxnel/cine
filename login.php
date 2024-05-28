<?php
session_start();
$connection=mysqli_connect("localhost","root","","cinema");
if(!$connection){
    echo"";
}
$mail=mysqli_real_escape_string($connection, $_POST['mail']);
$password=mysqli_real_escape_string($connection, $_POST['password']);
$query=mysqli_query($connection,"SELECT * FROM user WHERE mail='$mail' ");
if (mysqli_num_rows($query)> 0){
    $row=mysqli_fetch_assoc($query);
    $passe=$row['mdp'];
    if ($password=== $passe){
        echo'connecté';
        $_SESSION['element']=$user_id;
    }else{
        echo 'non connecté';
    }

}else{
    echo"imbécile  ton email n'existe pas";
}



?>