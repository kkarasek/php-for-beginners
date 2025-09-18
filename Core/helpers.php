<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}

function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require basePath("views/{$statusCode}.php");
    die();
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require basePath("views/" . $path);
}

function login($user)
{
    $_SESSION["user"] = [
        "email" => $user["email"],
    ];

    session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];
    session_destroy();

    $params = session_get_cookie_params();
    setcookie(
        "PHPSESSID",
        "",
        time() - 3600,
        $params["path"],
        $params["domain"]
    ); // time() - 3600 sets the expiration time to 1 hour in the past, which resulsts in the instant deletion of a cookie
}
