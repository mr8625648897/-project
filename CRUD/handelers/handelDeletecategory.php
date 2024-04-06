<?php
session_start() ;

include "../database/helpers/categoriesFunctions.php" ;
include "../core/functions.php" ;

deleteCategory($_POST['id']);

sessionStore('deletion' , 'your category has been deleted successfully') ;
redirect("../view/category/all.php");
die() ;


