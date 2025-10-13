<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $db = App::resolve(Database::class);

        $user = $db
            ->query("SELECT * FROM users WHERE email = :email", [
                "email" => $email,
            ])
            ->find();

        if ($user) {
            if (password_verify($password, $user["password"])) {
                $this->login([
                    "email" => $email,
                ]);

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION["user"] = [
            "email" => $user["email"],
        ];

        session_regenerate_id(true);
    }

    public function logout()
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
}
