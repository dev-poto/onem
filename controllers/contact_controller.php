<?php
$error = null;

if(!empty($_POST) && isset($_POST['btnContact'])){
    if(isset($_POST['email']) && isset($_POST['fullname']) && isset($_POST['message'])){
        if(!empty($_POST['email']) && !empty($_POST['fullname']) && !empty($_POST['message'])){
            $email = str_secur($_POST['email']);
            $firstname = str_secur($_POST['fullname']);
            $message = str_secur($_POST['message']);

            $message = ' - email envoyé par: ' . $firstname . ' : ' . $email;

            // ENVOYER UN EMAIL
            try {
                mail('felicienmukamba@gmail.com', 'On me contact sur mon site', $message);
            } catch (\Throwable $th) {
                 $error = "Connexion !";
            }
            
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Reessayez !";
    }
}
