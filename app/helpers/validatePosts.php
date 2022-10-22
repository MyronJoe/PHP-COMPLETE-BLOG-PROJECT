<?php  

function validatePost($post, $errors){
    if (empty($post["title"])) {
        array_push($errors, 'Title is required');
    }

    if (empty($post["body"])) {
        array_push($errors, 'Content is required');
    }

    if (empty($post["topic_id"])) {
        array_push($errors, 'Topic is required');
    }


    //checking if a Title already exist
    $existingPost= selectOne('posts', ['title' => $post["title"]]);
    if($existingPost){
        array_push($errors, 'Title already exists');
    }
    // dump($errors);
    return $errors;
}


?>