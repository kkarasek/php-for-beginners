<?php require(basePath('views/partials/head.php')) ?>
<?php require(basePath('views/partials/nav.php')) ?>
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

<?php require(basePath('views/partials/footer.php')) ?>