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
    
    // dump($errors);

    return $errors;
}

?>