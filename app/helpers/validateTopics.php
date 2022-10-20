<?php 

function validateTopic($topic, $errors){
    if (empty($topic["name"])) {
        array_push($errors, 'Name is required');
    }
    //checking if an email already exist
    $existingTopic= selectOne('topics', ['name' => $topic["name"]]);
    if(isset($existingTopic)){
        array_push($errors, 'Topic already exists');
    }
    // dump($errors);
    return $errors;
}


?>