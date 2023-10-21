
<?php
if (!$_SESSION["logged"] || $_SESSION['role'] != "admin"){
    header('Location:' . 'home');
}
create();
