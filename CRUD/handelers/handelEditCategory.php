<?php
session_start() ;

include "../database/helpers/categoriesFunctions.php" ;
include "../core/functions.php" ;

updateCategory( $_GET['id'], $_POST['new_name']) ;

sessionStore('edit' , "your category has been edited successfully") ;
redirect("../view/category/edit.php") ;
die() ;