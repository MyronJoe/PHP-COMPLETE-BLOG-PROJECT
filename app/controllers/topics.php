<?php
    include(ROOT_PATH . '/app/database/db.php');

    $table = 'topics';

    $topics = selectAll($table);

    if (isset($_POST['add-topic'])) {
        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/topics/index.php');
        exit();
    }
?>