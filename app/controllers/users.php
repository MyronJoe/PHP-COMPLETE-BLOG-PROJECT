<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/validateuser.php');

    $errors = [];
    $username = '';
    $email = '';
    $password = '';
    $confirmpass = '';

    if (isset($_POST['register-btn'])) {

        $errors = validateUser($_POST, $errors);
        

        if (count($errors) === 0) {
            unset($_POST['passwordconfirm'], $_POST['register-btn']);
            $_POST['admin'] = 0;

            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $user_id = create('users', $_POST);
            $user = selectOne('users', ['id' => $user_id]);
        }else{

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmpass = $_POST["passwordconfirm"];
        }
        // dump($user);
    }


?>