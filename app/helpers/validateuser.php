<?php 

function validateUser($user, $errors){
    

    if (empty($user["username"])) {
        array_push($errors, 'username is required');
    }

    if (empty($user["email"])) {
        array_push($errors, 'email is required');
    }

    if (empty($user["password"])) {
        array_push($errors, 'password is required');
    }

    if ($user["passwordconfirm"] !== $user["password"]) {
        array_push($errors, 'password does not match');
    }
    
    //checking if an email already exist
    $existingUser = selectOne('users', ['email' => $user["email"]]);
    if($existingUser){

        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['register-btn']) || isset($user['create-admin']) ) {
            array_push($errors, 'Email already exists');
        }
        
    }

    return $errors;
}

function validateLogin($user, $errors){
    

    if (empty($user["email"])) {
        array_push($errors, 'email is required');
    }

    if (empty($user["password"])) {
        array_push($errors, 'password is required');
    }

    return $errors;
}

?>