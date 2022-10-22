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

if(isset($_POST['post-btn'])){
    $errors = validatePost($_POST, $errors);
    if (count($errors) == 0) {
        unset($_POST['post-btn'], $_POST['topic_id']);
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
    }
}

?>