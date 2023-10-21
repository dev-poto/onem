
<?php
if (!$_SESSION["logged"] || $_SESSION['role'] != "demandeur"){
    header('Location :' . 'home');
}


$offre = offre($_GET['offre_id']);
$entreprise = entreprise($offre['entreprise_id']);
create();

