<?php
function update($id){
    $data = json_decode(json_encode(new Demandeurs($id), true));
    return $data;
}

    
if (!empty($_POST)) {
    $enty_data = $_POST;
    Demandeurs::update_demandeur($enty_data, $_GET['id']);
}