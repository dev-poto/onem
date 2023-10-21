<?php

    function logout() {
        
        $_SESSION["logged"] = false;
        $_SESSION["id"] = null;
        $_SESSION["email"] = null; 
        header('Location: home');  
    }