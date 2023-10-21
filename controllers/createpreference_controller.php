
<?php
if (!$_SESSION["logged"] || $_SESSION['role'] != "demandeur"){
    header('Location:' . 'home');
}
$postes = (array)Offres::poste();
create();
