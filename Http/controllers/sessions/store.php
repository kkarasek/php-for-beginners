<?php

use Core\App;
use Core\Database;
use Http\Forms\LoginForm;

$email = $_POST["email"];
$password = $_POST["password"];

$form = new LoginForm($email, $password);

$isValidated = $form->validate($email, $password);

if(! $isValidated){
    view("sessions/create.view.php", [
        "errors" => $form->errors(),
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
