<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/app/helpers/validatePosts.php');

if(isset($_POST['post-btn'])){
    unset($_POST['post-btn']);
    $_POST['user_id'] = 1;
    $_POST['published'] = 1;

    dump($_POST);
}

?>