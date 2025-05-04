<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <h1><?= $pageTitle ?></h1>
  <form class="create-note-form" method="post">
    <label for="body">Description</label>
    <textarea id="body" name="body" required><?= $_POST['body'] ?? '' ?></textarea>

    <?php if (isset($errors['body'])) : ?>
      <p class="error-message"><?= $errors['body'] ?></p>
    <?php endif; ?>

    <?php if (!empty($success)) : ?>
      <p class="success-message"><?= $success ?></p>
    <?php endif; ?>

    <button type="submit">Create</button>
  </form>
</main>

<?php require(basePath('views/partials/footer.php')) ?>