<?php
function create(){
    
    $_POST['demandeur_id'] = $_SESSION['id'];
    $_POST['offre_id'] = $_GET['offre_id'];

    if (!empty($_FILES)) {
        $data = $_POST;
        $file = $_FILES;
        Postulers::create($data, $file);
        header('Location:' . '?page=home');
    }else{
        return null;
    }
}

function entreprise($id) {
    return (array) new Entreprises($id);
}
function offre($id) {
    return (array) new Offres($id);
}