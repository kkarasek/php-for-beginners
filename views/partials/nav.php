<nav>
  <ul>
    <li><a href="/" class=<?= (urlIs('/') ? 'pink' : 'green') ?>>Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/notes">Notes</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
  <div>
    <?php if ($_SESSION['user'] ?? false) : ?>
      Hello Kuba!
    <?php else : ?>
      <a href="/register">Register</a>
    <?php endif; ?>
  </div>
</nav>