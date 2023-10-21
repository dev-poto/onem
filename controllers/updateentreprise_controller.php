
<?php
if (!$_SESSION["logged"] && ($_SESSION['role'] != "admin" || $_SESSION['role'] != "entreprise")){
    header('Location:' . '?page=home');
}

$data = update((integer)$_GET['id']);
