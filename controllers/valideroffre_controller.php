<?php
if (!$_SESSION["logged"] || $_SESSION['role'] != "admin"){
    header('Location:' . '?page=home');
}

$data = update((integer)$_GET['id']);