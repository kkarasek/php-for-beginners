<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <h1 class="login-title">Log In</h1>
  <div class="login-form-wrapper">
    <form method="POST" action="/login" class="registration-form">

      <div class="registration-form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <?php if (isset($errors['email'])) : ?>
        <p class="error-message"><?= $errors['email'] ?></p>
      <?php endif; ?>

      <div class="registration-form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <?php if (isset($errors['password'])) : ?>
        <p class="error-message"><?= $errors['password'] ?></p>
      <?php endif; ?>

      <button type="submit" class="registration-submit-btn">Log In</button>
    </form>
  </div>
</main>