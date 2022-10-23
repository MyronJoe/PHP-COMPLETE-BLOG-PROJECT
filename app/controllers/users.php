<?php

    include(ROOT_PATH . '/app/database/db.php');
    include(ROOT_PATH . '/app/helpers/validateuser.php');

    $errors = [];
    $username = '';
    $email = '';
    $password = '';
    $confirmpass = '';
    $table = 'users';


    //function that logs the user in
    function loginUser($user){
        $_SESSION['id'] = $user["id"];
        $_SESSION['username'] = $user["username"];
        $_SESSION['email'] = $user["email"];
        $_SESSION['admin'] = $user["admin"];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "success";

        if ($_SESSION['admin']) {
            header("location: " . BASE_URL . "/admin/dashboard.php");
        }else{
            header("location: " . BASE_URL . "/index.php");
        }
        exit();
    }

//creating admin and normal user
    if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {

        $errors = validateUser($_POST, $errors);
        

        if (count($errors) === 0) {
            unset($_POST['passwordconfirm'], $_POST['register-btn']);
            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            if ($_POST['admin']) {
                $_POST['admin'] = 1;
                $user = selectOne($table, ['id' => $user_id]);
                $_SESSION['message'] = "Admin user created successfully";
                $_SESSION['type'] = "success";
                header("location: " . BASE_URL . "/admin/users/index.php");
                exit();
            }else{
                $_POST['admin'] = 0;
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);

                // log user in after creating account
                loginUser($user);
            }
            
            
            

        }else{

            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmpass = $_POST["passwordconfirm"];
        }
        // dump($user);
    }


    //login function
    if (isset($_POST['login-btn'])) {

        $errors = validateLogin($_POST, $errors);

        if (count($errors) === 0) {
            $user = selectOne($table, ['email' => $_POST["email"]]);

            if ($user && password_verify($_POST["password"], $user['password'])) {
                //if true, log user in
                loginUser($user);

            }else{
                array_push($errors, 'Check email and password');
            }
            
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
    }



?>