<?php

/*
 * Alfonso: il faut inclure tes fonctions ici si tu vas les utiliser
 * aussi si tu vas utiliser des sessions il faut mettre session_start()
 *
 * Un autre point si tu veux utiliser des variables dans tes templates
 * c'est dans ce controlleur index.php ou nous devons faire les appels
 * en base de données
 *
 * par exemple:
 * case "listesujets:
 *      $sujets = getListeSujets()
 *      include("view/listeSujets.php");
 *      break;
 *
 * ou getListeSujets() est en fait un appel de tous les sujets en
 * base de données
 *
 * */

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page = 'signIn';
}
switch($page){

    case 'signIn';
    include("view/signIn.php");
    break;

    case 'signUp';
    include("view/signUp.php");
    break;

    case 'forum';
    include("view/forum.php");
    break;
}

?>