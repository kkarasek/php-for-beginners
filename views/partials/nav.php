<nav>
  <ul>
    <li><a href="/" class="<?= (urlIs('/') ? 'pink' : 'green') ?>">Home</a></li>
    <li><a href="/about">About</a></li>
    <?php if ($_SESSION['user'] ?? false) : ?>
      <li><a href="/notes">Notes</a></li>
    <?php endif; ?>
    <li><a href="/contact">Contact</a></li>
  </ul>
  <div class="auth-links">
    <?php if ($_SESSION['user'] ?? false) : ?>
      <?= $_SESSION['user']['email'] ?>
      <form method="post" action="/sessions">
        <input type="hidden" name="_method" value="DELETE" />
        <button class="logout-btn" type="submit">Logout</button>
    </form>
    <?php else : ?>
      <a href="/register">Register</a>
      <a href="/login">Login</a>
    <?php endif; ?>
  </div>
</nav>