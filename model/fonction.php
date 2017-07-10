<?php

function connexion(){
    $connexion = new PDO(
        'mysql:host=localhost;dbname=projetforum;charset=UTF8','root','1234');
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    return $connexion;
}

function get_user_by_username($username){
    $connexion=connexion();
    $object = $connexion->prepare("SELECT * FROM projet WHERE username=:username");
    $object->execute(array("username" => $username));
    $users=$object->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function get_user_by_mail($mail){
$object = $connexion->prepare("SELECT * FROM projet WHERE email=:email");
$object->execute(array("email" => $mail));
$users=$object->fetchAll(PDO::FETCH_ASSOC);
}