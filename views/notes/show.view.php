<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <a href="/notes">Back to notes</a>
  <h1><?= $pageTitle ?></h1>
  <p><?= htmlspecialchars($note['body']) ?></p>
  <form class="delete-note-form" method="POST">
    <input type="hidden" name="_method" value="DELETE"/>
    <input type="hidden" name="id" value="<?= $note['id'] ?>" />
    <button type="submit">Delete</button>
  </form>
</main>

<?php require(basePath('views/partials/footer.php')) ?>