<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>

<main>
  <h1><?= $pageTitle ?></h1>   
  <ul>
    <?php foreach($notes as $note) : ?>
      <a href="/note?id=<?= $note['id']?>">
        <li><?= htmlspecialchars($note['body']) ?></li>
      </a>
    <?php endforeach; ?>
  </ul>

  <p class="create-note-btn">
    <a href="/notes/create" >Create Note</a>
  </p>
</main>

<?php require(basePath('views/partials/footer.php')) ?>