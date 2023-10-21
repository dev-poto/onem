
<?php
if (!$_SESSION["logged"] || $_SESSION['role'] != "demandeur"){
    header('Location:' . 'home');
}
create();
