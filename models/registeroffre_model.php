<?php
function registeroffre()
{
    if (!empty($_POST)) {
        $data = $_POST;
        Offres::newOffre($data);
        debug(Offres::newOffre($data));
    } 
}