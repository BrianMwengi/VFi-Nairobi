<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'name is required');
    }

    if (empty($user['email'])) {
        array_push($errors, 'email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'password is required');
    }

    if ($user['re_password'] !== $user['password']) {
        array_push($errors, 'passwords do not match');
    }
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if($existingUser) {
            array_push($errors, 'Email already exists');
        }

    return $errors;
}

function validateLogin($user)
{
    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'name is required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Password is required');
    }
        
    return $errors;
}