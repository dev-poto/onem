<?php
function register()
{
    if (!empty($_POST)) {
        $data = $_POST;
        Demandeurs::newDemandeur($data);
    } 
}