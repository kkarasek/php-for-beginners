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

      >ul {
        list-style: none;
        display: flex;
        gap: 10px;
      }
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

    .create-note-form .error-message {
      color: red;
    }

    .create-note-form .success-message {
      color: green;
    }
  </style>
</head>

<body>