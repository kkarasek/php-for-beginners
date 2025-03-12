<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<main>
  <h1>Recommended Books</h1>   
  <ul>
    <?php foreach($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['title'] ?>
        </a>
      </li>
      <?php endforeach; ?>
  </ul> 
</main>

<?php require('views/partials/footer.php') ?>