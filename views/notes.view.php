<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
  <h1><?= $pageTitle ?></h1>   
  <ul>
    <?php foreach($notes as $note) : ?>
      <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:text-underline">
        <li><?= $note['body'] ?></li>
      </a>
    <?php endforeach; ?>
  </ul>
</main>

<?php require('views/partials/footer.php') ?>