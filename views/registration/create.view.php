<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <h1>Register for a new account!</h1>
  <div>
    <form method="POST" action="/register" class="registration-form">
      <!-- <div class="registration-form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div> -->

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

      <!-- <div class="registration-form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
      </div> -->

      <button type="submit" class="registration-submit-btn">Register</button>
    </form>
  </div>
</main>