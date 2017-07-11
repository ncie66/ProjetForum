<?php

$('#envoi').click(function(e){
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    var pseudo = encodeURIComponent( $('#pseudo').val() ); // on sécurise les données
    var message = encodeURIComponent( $('#message').val() );

    if(pseudo != "" && message != ""){ // on vérifie que les variables ne sont pas vides
        $.ajax({
            url : "traitement.php", // on donne l'URL du fichier de traitement
            type : "POST", // la requête est de type POST
            data : "pseudo=" + pseudo + "&message=" + message // et on envoie nos données
        });

       $('#messages').append("<p>" + pseudo + " dit : " + message + "</p>"); // on ajoute le message dans la zone prévue
    }
});


// on se connecte à notre base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tchat', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire

    if(!empty($_POST['pseudo']) AND !empty($_POST['message'])){ // si les variables ne sont pas vides
    
        $pseudo = mysql_real_escape_string($_POST['pseudo']);
        $message = mysql_real_escape_string($_POST['message']); // on sécurise nos données

        // puis on entre les données en base de données :
        $insertion = $bdd->prepare('INSERT INTO messages VALUES("", :pseudo, :message)');
        $insertion->execute(array(
            'pseudo' => $pseudo,
            'message' => $message
        ));

    }
    else{
        echo "Vous avez oublié de remplir un des champs !";
    }

}

?>
