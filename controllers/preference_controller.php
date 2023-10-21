<?php
$i = 0;
$postes = (array)Offres::poste();
if (!empty($_POST)){
    foreach ($_POST as $data){
        $i++;
        $value = $data['nom-' . $i];
        debug($value);
        
    }
    exit();
}