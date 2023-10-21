
<?php
if (!$_SESSION["logged"] && ($_SESSION['role'] != "entreprise" || $_SESSION['role'] != "admin")){
    header('Location:' . 'home');
}

$entreprises = entreprises();
create();
