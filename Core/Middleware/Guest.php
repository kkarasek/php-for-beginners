<?php

namespace Core\Middleware;

class Guest
{
  public function handle()
  {
    if ($_SESSION['user'] ?? false) {
      // error_log("\033[31mUser already logged in - redirecting\033[0m");
      header('location: /');
      exit();
    }
  }
}