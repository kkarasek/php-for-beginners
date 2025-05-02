<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
  <h1><?= $pageTitle ?></h1>   
  <form class="create-note-form" method="post">
    <label for="body">Description</label>
    <textarea id="body" name="body"></textarea>
    <button type="submit">Create</button>
  </form>
</main>

<?php require('views/partials/footer.php') ?>