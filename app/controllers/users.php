<?php

    include(ROOT_PATH . '/app/database/db.php');

    $errors = [];
    $username = '';
    $email = '';
    $password = '';
    $confirmpass = '';

    if (isset($_POST['register-btn'])) {

        if (empty($_POST["username"])) {
            array_push($errors, 'username is required');
        }

        if (empty($_POST["email"])) {
            array_push($errors, 'email is required');
        }

        if (empty($_POST["password"])) {
            array_push($errors, 'password is required');
        }

        if ($_POST["passwordconfirm"] !== $_POST["password"]) {
            array_push($errors, 'password does not match');
        }
        
        // dump($errors);

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