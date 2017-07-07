<?php

$username = $_POST['nom'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$flag = true;
$flag2 = true;
$flag3 = false;

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

$object = $connexion->prepare("SELECT * FROM projet WHERE email=:email");
$object->execute(array("email" => $mail));
$users=$object->fetchAll(PDO::FETCH_ASSOC);

if(empty($users)==true){
   $flag2 = false;
}
if(strlen($password)<8){
    $flag3 = true;
}

if($flag==false and $flag2==false and $flag3==false){
        $pdo = $connexion->prepare('INSERT INTO projetforum.projet SET 
        username=:nom, password=:password, email=:mail');
        $pdo->execute(array('nom'=>$username,'password'=>$password,'mail'=>$mail));
        echo "l'eleve est bien enregistré dans le tableau";
}
else{
    echo "Erreur ! Pseudo ou adresse mail déja existante ou incorrect !";
}
?>
