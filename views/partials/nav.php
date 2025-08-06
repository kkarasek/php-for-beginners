<nav>
  <ul>
    <li><a href="/" class=<?= (urlIs('/') ? 'pink' : 'green') ?>>Home</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/notes">Notes</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
  <div class="auth-links">
    <?php if ($_SESSION['user'] ?? false) : ?>
      <?= $_SESSION['user']['email'] ?>
    <?php else : ?>
      <a href="/register">Register</a>
      <a href="/login">Login</a>
    <?php endif; ?>
  </div>
</nav>