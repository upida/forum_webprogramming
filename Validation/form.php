<?php

session_start();

$request = $_POST;

$_SESSION['request'] = $request;

$errors = [];

if (empty($request['name'])) {
    $errors['name'] = 'Name cannot be empty';
} else {
    # name cannot contain special characters
    if (preg_match('/[^a-zA-Z ]/', $request['name'])) {
        $errors['name'] = 'Name cannot contain special characters';
    }
    # name cannot be longer than 20 characters
    else if (strlen($request['name']) > 20) {
        $errors['name'] = 'Name cannot be longer than 20 characters';
    }
    # name cannot be shorter than 3 characters
    else if (strlen($request['name']) < 3) {
        $errors['name'] = 'Name cannot be shorter than 3 characters';
    }
}

if (empty($request['NIK'])) {
    $errors['NIK'] = 'NIK cannot be empty';
} else {
    # NIK only contains numbers
    if (!preg_match('/\d/', $request['NIK'])) {
        $errors['NIK'] = 'NIK only contains numbers';
    }
    # NIK must be 11 characters long
    else if (strlen($request['NIK']) != 11) {
        $errors['NIK'] = 'NIK must be 11 characters long';
    }
}

if (empty($request['email'])) {
    $errors['email'] = 'Email cannot be empty';
} else {
    # email must be valid
    if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email must be valid';
    }
}

if (empty($request['phone'])) {
    $errors['phone'] = 'Phone cannot be empty';
} else {
    # phone must be start with 0 or 62
    if (!preg_match('/^(0|62)/', $request['phone'])) {
        $errors['phone'] = 'Phone must start with 0 or 62';
    }
    # phone only contains numbers
    else if (!preg_match('/\d/', $request['phone'])) {
        $errors['phone'] = 'Phone only contains numbers';
    }
    # max length of phone is 14 characters
    else if (strlen($request['phone']) > 14) {
        $errors['phone'] = 'Phone must be 14 characters long';
    }
    # min length of phone is 10 characters
    else if (strlen($request['phone']) < 10) {
        $errors['phone'] = 'Phone must be 10 characters long';
    }
}

$success = '';
if (empty($errors)) {
    $success = 'Registration successful';
}

$_SESSION['errors'] = $errors;
$_SESSION['success'] = $success;

header('location: index.php');
