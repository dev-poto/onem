<?php
function create()
{
    if (!empty($_POST)) {
        $data = $_POST;
        Demandeurs::create($data);
        header('Location:' . 'dashbord');
    }
}