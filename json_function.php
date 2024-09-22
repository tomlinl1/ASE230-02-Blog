<?php
    $string=file_get_contents('blogs.json');
    $php_array=json_decode($string, true);
    $blogs=$php_array;
?>