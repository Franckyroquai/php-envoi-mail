<?php

    function check(){
        if(!empty($_REQUEST)) {
            /*Test données expéditeur*/
            if (empty($_REQUEST["inputEmailExpediteur"])) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorExp'] = "Merci d'entrer l'email de l'expediteur";
            } else {
                //Le cas contraire
                $GLOBALS['valueExp'] = $_REQUEST["inputEmailExpediteur"];
            }

            /*Test données destinataire*/
            if (empty($_REQUEST["inputEmailDestinataire"])) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorDes'] = "Merci d'entrer l'email du destinataire";
            } else {
                //Le cas contraire
                $GLOBALS['valueDes'] = $_REQUEST["inputEmailDestinataire"];
            }
            /*Test données objet*/
            if (empty($_REQUEST["InputObjet"])) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorObj'] = "Merci d'entrer l'objet de votre message";
            } else {
                //Le cas contraire
                $GLOBALS['valueObj'] = $_REQUEST["InputObjet"];
            }
            /*Test données message*/
            if (empty($_REQUEST["InputMessage"])) {
                //Le cas où la variable inputEmailExpediteur est vide
                $GLOBALS['errorMg'] = "Merci d'entrer votre message";
            } else {
                //Le cas contraire
                $GLOBALS['valueMg'] = $_REQUEST["InputMessage"];
            }
        }
    }


?>