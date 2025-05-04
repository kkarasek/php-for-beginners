<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <a href="/notes">Back to notes</a>
  <h1><?= $pageTitle ?></h1>   
  <p><?= htmlspecialchars($note['body']) ?></p>
</main>

<?php require(basePath('views/partials/footer.php')) ?>