<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="view/animate.css">
    <title>Projet</title>
</head>
<body>

<header>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#Catégories">Catégories</a></li>
        <li><a href="#Tchat">Tchat</a></li>
    </ul>
</header>
<br><br><br><br><br><br>

<hr/>
       <h1><div class="allo"><center> Bienvenue sur le Forum ! </center><div></h1>
<hr/>
    <h2> bienvenue ! </h1>

    <form action="service/decoservice.php" >

    <input type="submit" class="Envoyer" value="Se deconnecter">
    <a href="view/profil.php">Profil utilisateur</a></li>

    </form>
<br><br><br><br><br><br>
<hr/>
    <h1><center>  Catégories ! </center></h1>
<div class="cat">
    <div class="cat1">
        <!-- il faudrait que ces categories soit en base de données -->
        <p>HTML</p>
        <p>PHP</p>
        <p>CSS</p>
    </div>
    <div class="cat2">
        <p>GUMP</p>
        <p>GULP</p>
        <p>MYSQL</p>
    </div>
</div>

<hr/>
<br><br><br><br><br><br>

<hr/>
    <h1><center>  Tchat entre membres ! </center></h1>
<hr/>


<form action="minichat.php?message=envoyer" method="post">
Votre pseudo : <input type="text" name="pseudo" /><br />
Votre message : <input type="text" name="message" /><br />
<input type="submit" value="Envoyer" />
</form>


<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>