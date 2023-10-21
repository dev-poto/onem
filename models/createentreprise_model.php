<?php
function create()
{
    if (!empty($_POST)) {
        $data = $_POST;
        Entreprises::create($data);
        header('Location:' . '?page=dashbord');
    } 
}