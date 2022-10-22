<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePosts.php');

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = [];
$title = '';
$body= '';
$topic_id = '';
$published = '';

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

?>