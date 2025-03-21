<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
  <a href="/notes">Back to notes</a>
  <h1><?= $pageTitle ?></h1>   
  <p><?= $note['body'] ?></p>
</main>

<?php require('views/partials/footer.php') ?>