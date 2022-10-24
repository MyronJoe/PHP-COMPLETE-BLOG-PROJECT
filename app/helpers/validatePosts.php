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
        if (isset($post['edit-post-btn']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Title already exists');
        }

        if (isset($post['post-btn'])) {
            array_push($errors, 'Title already exists');
        }
        
    }

    return $errors;
}


?>