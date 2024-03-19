<?php

    function check(){
        $i=0;
        if(!empty($_REQUEST)) {
            /*Test données expéditeur*/
            if (empty(trim($_REQUEST["inputEmailExpediteur"]))) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorExp'] = "Merci d'entrer l'email de l'expediteur";
            } else {
                //Le cas contraire
                $GLOBALS['valueExp'] = trim($_REQUEST["inputEmailExpediteur"]);
                $i++;
            }

            /*Test données destinataire*/
            if (empty(trim($_REQUEST["inputEmailDestinataire"]))) {
                //Le cas où la variable inputEmailExpediteur est vide

                $GLOBALS['errorDes'] = "Merci d'entrer l'email du destinataire";
            } else {
                //Le cas contraire
                $GLOBALS['valueDes'] = trim($_REQUEST["inputEmailDestinataire"]);
                $i++;
            }
            /*Test données objet*/
            if (empty(trim($_REQUEST["InputObjet"]))) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorObj'] = "Merci d'entrer l'objet de votre message";
            } else {
                //Le cas contraire
                $GLOBALS['valueObj'] = trim($_REQUEST["InputObjet"]);
                $i++;
            }
            /*Test données message*/
            if (empty(trim($_REQUEST["InputMessage"]))) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorMg'] = "Merci d'entrer votre message";
            } else {
                //Le cas contraire
                $GLOBALS['valueMg'] = trim($_REQUEST["InputMessage"]);
                $i++;
            }
        }
        if ($i==4) {
            $GLOBALS['valid_data'] = true;
        }
    }


?>