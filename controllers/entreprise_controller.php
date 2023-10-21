<?php
if (!$_SESSION["logged"] && (!isset($_GET['id']) || !$_SESSION['id'])){
    header('Location:' . 'home');
}
$entreprise_id = isset($_GET['id']) ? $_GET['id'] : $_SESSION['id'];
$entreprise = entreprise((integer)$entreprise_id);
$entreprise_details = entreprise_details((integer)$entreprise_id);