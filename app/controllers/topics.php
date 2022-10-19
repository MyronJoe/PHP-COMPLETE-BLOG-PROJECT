<?php
    include(ROOT_PATH . '/app/database/db.php');

    $table = 'topics';

    $id = '';
    $name = '';
    $description = '';

    $topics = selectAll($table);

    if (isset($_POST['add-topic'])) {
        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic created successfully';
        $_SESSION["type"] = "success";
        header('location: '. BASE_URL . '/admin/topics/index.php');
        exit();
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $topic = selectOne($table, ['id' => $id]);
        $id = $topic['id'];
        $name = $topic['name'];
        $description = $topic['description'];
        
    }
?>