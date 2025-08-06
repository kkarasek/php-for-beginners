<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro to PHP</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: start;
      height: 100vh;
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav {
      background-color: rgb(203 213 225);
      width: 100%;
      margin-bottom: 3rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-right: 20px;

      >ul {
        list-style: none;
        display: flex;
        gap: 10px
      }
    }

    .auth-links {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .pink {
      color: #fab;
    }

    .green {
      color: green;
    }

    .create-note-btn {
      margin-top: 1rem;
    }

    .create-note-btn:hover {
      color: blue;
      text-decoration: underline;
    }

    .create-note-form {
      display: flex;
      flex-direction: column;
    }

    .create-note-form>label {
      margin-bottom: 0.5rem;
    }

    .create-note-form>textarea {
      width: 380px;
      height: 100px;
    }

    .create-note-form>button {
      margin-top: 1rem;
      width: 80px;
    }

    .create-note-form .error-message,
    .registration-form .error-message {
      color: red;
    }

    .create-note-form .success-message {
      color: green;
    }

    .delete-note-form {
      margin-top: 2rem;
    }

    .delete-note-form>button {
      color: red;
    }

    .edit-note-btn {
      margin-top: 1rem;
      color: green;
    }

    .edit-note-form {
      display: flex;
      flex-direction: column;
    }

    .edit-note-form>label {
      margin-bottom: 0.5rem;
    }

    .edit-note-form>textarea {
      width: 380px;
      height: 100px;
    }

    .edit-note-form>div {
      margin-top: 1rem;
      display: flex;
      gap: 1rem;
    }

    .edit-note-form .error-message {
      color: red;
    }

    .edit-note-form .success-message {
      color: green;
    }

    .registration-form-group {
      margin-bottom: 15px;
    }

    .registration-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .registration-form input[type="text"],
    .registration-form input[type="email"],
    .registration-form input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .registration-submit-btn {
      background-color: #007cba;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .registration-submit-btn:hover {
      background-color: #005a87;
    }
  </style>
</head>

<body>