<?php

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