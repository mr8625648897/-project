<?php

function readCategories(){
    $content = file_get_contents(__DIR__ . "/../data/categories.json");
    return json_decode($content , true) ;
}

function writeCategories($categories){
    $categoriesToJson = json_encode($categories) ;
    file_put_contents(__DIR__ . "/../data/categories.json" , $categoriesToJson , JSON_PRETTY_PRINT);
}

function createCategory($categoryName){
    $categories = readCategories();
    $lastCategory = end($categories);
    $lastCategoryId = $lastCategory['id'] ?? 0 ;
    $newCategory = [
        'id' => $lastCategoryId +1 ,
        'name' => $categoryName ,
    ];
     $categories[] = $newCategory;
    writeCategories($categories) ;
}

function readAllCategories(){
    return readCategories() ;
}

function readOneCategory($id){
    $categories = readAllCategories() ;
    foreach($categories as $category){
        if($category['id'] == $id){
            return $category;
        }
        else{
            return null;
        }
    }
}

function deleteCategory($id){
    $categories = readCategories();
    foreach($categories as $category){
        if ($category['id'] != $id){
            $newCategories[] = $category;
        }
    }
    writeCategories($newCategories);
}

function updateCategory($id , $newCategoryName){
    $categories = readCategories();
    foreach($categories as $category){
        if ($category['id'] == $id){
            $category['name'] = $newCategoryName;
        }
    }
    writeCategories($categories);
}