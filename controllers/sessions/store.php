<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST["email"];
$password = $_POST["password"];

$errors = [];

if (!Validator::email($email)) {
    $errors["email"] = "Please provide a valid email address.";
}

if (!Validator::string($password)) {
    $errors["password"] = "Please provide a valid password.";
}

if (!empty($errors)) {
    view("sessions/create.view.php", [
        "errors" => $errors,
    ]);
    return;
}

$db = App::resolve(Database::class);

$user = $db
    ->query("SELECT * FROM users WHERE email = :email", [
        "email" => $email,
    ])
    ->find();

if ($user) {
    if (password_verify($password, $user["password"])) {
        login([
            "email" => $email,
        ]);

        header("location: /");
        exit();
    }
}

$errors["email"] =
    "No matching account found for that email address and password.";
view("sessions/create.view.php", [
    "errors" => $errors,
]);
