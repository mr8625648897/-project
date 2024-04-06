<?php
session_start() ;
include "../core/functions.php" ;
include "../core/validations.php" ;
include "../database/helpers/categoriesFunctions.php" ;



$success = "your category has been successfully added" ;

if (postMethod()){
    $name = sanitizeInput($_POST['name'])  ;

   if (requiredInput($name)){
        echo "Name is required";
    }
    else{
        createCategory($name) ;
        sessionStore('success' , $success);
        redirect("../view/category/create.php") ;
        die() ;

    }

}

else{
    echo "Not supported method" ;
}






