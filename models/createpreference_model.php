<?php
function create()
{
    if (!empty($_POST)) {
        $_POST["demandeur_id"] = $_SESSION['id'];
        $data = $_POST;
        Preferences::create($data);
        header('Location:' . '?page=demandeur');
    } 
}