<?php
function dd($executable){
    echo "<pre>";
    var_dump($executable);
    echo "</pre>";
    die();
}
function currentPg(){
    return $_SERVER["REQUEST_URI"];
}
