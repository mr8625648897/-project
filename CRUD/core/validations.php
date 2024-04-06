<?php

function requiredInput($input){
    if (empty($input)){
        return true;
    }
    else{
        return false;
    }
}

function sanitizeInput($input){
    return htmlspecialchars(htmlentities(trim($input))) ;
}

function minInput($input , $length){
    if (strlen($input) < $length){
        return true ;
    }
    else{
        return false;
    }
}

function maxInput($input , $length){
    if (strlen($input) > $length){
        return true ;
    }
    else{
        return false;
    }
}

function sameInput($input , $length){
    if (strlen($input) != $length){
        return true ;
    }
    else{
        return false;
    }
}

function checkEmail($input){
    if (!filter_var($input , FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else {
        return false;
    }
}