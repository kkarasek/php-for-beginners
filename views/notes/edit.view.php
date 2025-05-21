<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <h1><?= $pageTitle ?></h1>
  <form class="edit-note-form" method="post" action="/note">
    <input type="hidden" name="_method" value="PATCH" />
    <input type="hidden" name="id" value="<?= $note['id'] ?>" />

    <label for="body">Description</label>
    <textarea id="body" name="body" required><?= $note['body'] ?></textarea>

    <?php if (isset($errors['body'])) : ?>
      <p class="error-message"><?= $errors['body'] ?></p>
    <?php endif; ?>

    <div>
      <a href="/notes">Cancel</a>
      <button type="submit">Update</button>
    </div>
  </form>
</main>

<?php require(basePath('views/partials/footer.php')) ?>