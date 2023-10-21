<?php
function delete($id) {
    Entreprises::delete($id);
    header('Location:' . '?page=dashbord');
}