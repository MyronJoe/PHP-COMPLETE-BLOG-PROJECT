<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePosts.php');

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = [];
$id = '';
$title = '';
$body= '';
$topic_id = '';
$published = '';
$image = '';

//Get id for edit
if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id= $post['id'];
    $title = $post['title'];
    $body= $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
    
    // dump($post);
}

//Delete functionality
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Post was deleted successfully';
    $_SESSION["type"] = "success";
    header('location: '. BASE_URL . '/admin/posts/index.php');
    exit();
}

//function for Published and Unpublished Post
if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];

    //updating the published post in the post table
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = 'Post Publish State Changed';
    $_SESSION["type"] = "success";
    header('location: '. BASE_URL . '/admin/posts/index.php');
    exit();
}


//add post funtinality
if(isset($_POST['post-btn'])){
    // dump($_FILES['image']);
    $errors = validatePost($_POST, $errors);
    //image upload
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() ."_". $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $imageName;
        }else{
            array_push($errors, 'Image failed to upload');
        }

    }else{
        array_push($errors, 'Image is required');
    }

     //Post upload
    if (count($errors) == 0) {
        unset($_POST['post-btn']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;


        $post_id = create($table, $_POST);
        $_SESSION['message'] = 'Post created successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/posts/index.php');
        exit();
    }else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


//edit functionality
if(isset($_POST['edit-post-btn'])){
    
    $errors = validatePost($_POST, $errors);
    
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() ."_". $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $imageName;
        }else{
            array_push($errors, 'Image failed to upload');
        }

    }else{
        array_push($errors, 'Image is required');
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['edit-post-btn'], $_POST['id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        // dump($_POST);

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Post Updated Successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/posts/index.php');
        exit();
    }else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        
    }


}

?>