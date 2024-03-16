<!DOCTYPE html>
<html lang="fr" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "J'envoie des mails en PHP !!!" ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    echo"<h1>Envoi de mails en PHP</h1>";

    $destinataire = "franckyroquai@gmail.com";
    $titre = "Un message de mon application d'envoi de mails N°2 ;)";
    $message = "Bonjour Franck
    Ceci est un mail de confirmation de ton inscription
    au club des champions !
    Merci, nous sommes honorés";

    $envoi = mail($destinataire,$titre, $message);

    var_dump($envoi);




    ?>
    
</body>
</html>