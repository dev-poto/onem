<?php

function str_secur($str){
    return htmlspecialchars($str);
}

function debug($var){
    return '<pre>' . var_dump($var) . '</pre>';
}