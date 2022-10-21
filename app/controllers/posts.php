<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePosts.php');

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = [];

if(isset($_POST['post-btn'])){
    unset($_POST['post-btn'], $_POST['topic_id']);
    $_POST['user_id'] = 1;
    $_POST['published'] = 1;

    $post_id = create($table, $_POST);
    $_SESSION['message'] = 'Post created successfully';
    $_SESSION["type"] = "success";
    header('location: '. BASE_URL . '/admin/posts/index.php');
}

?>