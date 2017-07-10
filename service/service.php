<?php
include "fonction.php";
$username = $_POST['nom'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$flag = true;
$flag2 = true;
$flag3 = false;
die();

$usersame = get_user_by_username($username);
$mail = get_user_by_mail($mail);

if(empty($usersame)==true){
   $flag = false;
}

if(empty($mail)==true){
   $flag2 = false;
}
if(strlen($password)<8){
    $flag3 = true;
}

if($flag==false and $flag2==false and $flag3==false){
        $pdo = $connexion->prepare('INSERT INTO projetforum.projet SET 
        username=:nom, password=:password, email=:mail');
        $pdo->execute(array('nom'=>$username,'password'=>$password,'mail'=>$mail));
        header("location: ../index.php?page=signIn");
}
else{
    header("location: ../index.php?page=signUp");
}

?>
