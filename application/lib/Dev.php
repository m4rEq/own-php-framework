<?php

ini_set('disply_errors', 1);
error_reporting(E_ALL);

function debug($str) {
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}

