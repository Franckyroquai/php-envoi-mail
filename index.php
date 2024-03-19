<?php
require("lib/functions.php");
$errorDes = $errorExp = $errorObj = $errorMg = "";
$valueDes = $valueExp = $valueObj = $valueMg = $valueEnv = "";
$valid_data = false;
check();
if ($valid_data) {
    //envoi du mail

    $destinataire = $valueDes;
    $objet = $valueObj;
    $message = $valueMg;
    $entete['From'] = "\"Expéditeur\" <".$valueExp.">"; 
    $entete['Reply-To'] = "\"Expéditeur\" <".$valueExp.">"; 
    $entete['X-Priority'] = "1";
    $envoi = mail($destinataire, $objet, $message, $entete);
    if ($envoi) {
        $valueEnv = "Mail envoyé avec succès ! Merci et à très bientôt !";
        $errorDes = $errorExp = $errorObj = $errorMg = "";
        $valueDes = $valueExp = $valueObj = $valueMg = "";
        //mail envoyé au serveur correctement
    }else {
        //mail non envoyé au serveur
        $valueEnv = "Le message n'a pû être envoyé, Merci de réessayer !";
    }
}


?>
<!DOCTYPE html>
<html lang="fr" dir="ltr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "J'envoie des mails en PHP !!!" ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Liens Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body style="background-color: beige" >
   <h1>Application d'envoi de courrier</h1>
   <div class="container">
    <form class="" action="" method="post">
        <div class="form-row" >
            <div class="form-group col-md-6" >
                <label for="">Expéditeur <span>*</span> </label>
                <input type="email" class="form-control" name="inputEmailExpediteur" 
                 value="<?php echo $valueExp ?>" placeholder="Entrez votre Email !" >
                <p class="comment-error"><?php echo $errorExp ?></p>
            </div>
            <div class="form-group col-md-6" >
                <label for="">Destinataire <span>*</span> </label>
                <input type="email" class="form-control" name="inputEmailDestinataire" 
                value="<?php echo $valueDes ?>" placeholder="Entrez l'Email du destinataire !" >
                <p class="comment-error"><?php echo $errorDes ?></p>
            </div>
        </div>
        <div class="form-row" >
            <label for="">Objet <span>*</span></label>
            <input type="text" class="form-control" placeholder="Entrez l'objet de votre message !"
            name="InputObjet" value="<?php echo $valueObj ?>" >
            <p class="comment-error"><?php echo $errorObj ?></p>
        </div>
        <div class="form-row" >
            <label for="">Message <span>*</span></label>
            <textarea class="form-control" name="InputMessage" rows="8" cols="80" ><?php echo $valueMg ?></textarea>
            <p class="comment-error"><?php echo $errorMg ?></p>
        </div>
        <p class="comment-obligatoire" ><span>*</span> Ces champs sont obligatoires !</p>
        <input type="submit" class="btn btn-lg btn-success btn-block" value="Envoyer" >
        <p class="comment-success"><?php echo $valueEnv ?></p>
    </form>


   </div>
    
</body>
</html>