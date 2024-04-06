<?php

function getRequestMethod(){
    return $_SERVER['REQUEST_METHOD'] ;
}

function postMethod(){
    if(getRequestMethod() == 'POST'){
        return true ;
    }
    else {
        return false;
    }
}

function getMethod(){
    if (getRequestMethod() == 'GET'){
        return true;
    }
    else{
        return false;
    }
}

function sessionStore($key , $value){
    $_SESSION[$key] = $value ;
}

function sessionGet($key){
    return $_SESSION[$key] ;
}

function redirect($path){
    header("location:$path") ;

}