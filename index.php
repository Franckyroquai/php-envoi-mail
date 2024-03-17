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
                placeholder="Entrez votre Email !" >
                <p class="comment-error"></p>
            </div>
            <div class="form-group col-md-6" >
                <label for="">Destinataire <span>*</span> </label>
                <input type="email" class="form-control" name="inputEmailDestinataire" 
                placeholder="Entrez l'Email du destinataire !" >
                <p class="comment-error"></p>
            </div>
        </div>
        <div class="form-row" >
            <label for="">Objet <span>*</span></label>
            <input type="text" class="form-control" placeholder="Entrez l'objet de votre message !"
            name="InputObjet">
            <p class="comment-error"></p>
        </div>
        <div class="form-row" >
            <label for="">Message <span>*</span></label>
            <textarea class="form-control" name="InputMessage"></textarea>
            <p class="comment-error"></p>
        </div>
        <p class="comment-obligatoire" ><span>*</span> Ces champs sont obligatoires !</p>
        <input type="submit" class="btn btn-lg btn-success btn-block" value="Envoyer" >
        <p class="comment-success"></p>
    </form>


   </div>
    
</body>
</html>