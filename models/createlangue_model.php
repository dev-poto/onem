<?php
function create()
{
    if (!empty($_POST)) {
        $_POST["demandeur_id"] = $_SESSION['id'];
        $data = $_POST;
        Langues::create($data);
        header('Location:' . '?page=demandeur');
    } 
}