<?php
function update($id){
    $data = json_decode(json_encode(new Entreprises($id), true));
    return $data;
}

if (!empty($_POST)) {
    $enty_data = $_POST;
    Entreprises::update($enty_data, $_GET['id']);
    header('Location:' . '?page=dashbord');
}