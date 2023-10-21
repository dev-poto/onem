<?php
function create()
{
    if (!empty($_POST)) {
        $id = isset($_POST["entreprise_id"]) ? $_POST["entreprise_id"] : $_SESSION['id'];
        $_POST["entreprise_id"] = $id;
        $data = $_POST;
        Offres::create($data);
        header('Location:' . '?page=home');
        
    } 
}

function entreprises() {
    return Entreprises::show();
}