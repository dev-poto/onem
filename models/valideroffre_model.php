<?php
function update($id){
    $data = json_decode(json_encode(new Offres($id), true));
    return $data;
}

if (!empty($_POST)) {
    $enty_data = $_POST;
    Offres::valider_offre($enty_data, $_GET['id']);
    header('Location:' . '?page=dashbord');
}