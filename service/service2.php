<?php

$username = $_POST['nom'];
$password = $_POST['password'];
$flag = true;
$flag2 = true;

$connexion = new PDO(
    'mysql:host=localhost;dbname=projetforum;charset=UTF8','root','1234');
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

$object = $connexion->prepare("SELECT * FROM projet WHERE username=:username");
$object->execute(array("username" => $username));
$users=$object->fetchAll(PDO::FETCH_ASSOC);

if(empty($users)==true){
   $flag = false;
}

$object = $connexion->prepare("SELECT * FROM projet WHERE password=:password");
$object->execute(array("password" => $password));
$users=$object->fetchAll(PDO::FETCH_ASSOC);

if(empty($users)==true){
   $flag = false;
}

if($flag==true and $flag2==true){
        header("location: ../index.php?page=forum");
}
else{
    header("location: ../index.php?page=signIn");
}

?>