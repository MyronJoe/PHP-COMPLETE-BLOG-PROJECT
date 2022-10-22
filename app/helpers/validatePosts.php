<?php  

function validatePost($post, $errors){
    if (empty($post["title"])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post["body"])) {
        array_push($errors, 'Content is required');
    }

    if (empty($post["image"])) {
        array_push($errors, 'Image is required');
    }

    if (empty($post["topic_id"])) {
        array_push($errors, 'Topic is required');
    }


    //checking if a Title already exist
    $existingTopic= selectOne('posts', ['title' => $post["title"]]);
    if($existingTopic){
        array_push($errors, 'Title already exists');
    }
    // dump($errors);
    return $errors;
}


?>