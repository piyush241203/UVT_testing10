<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title ?? 'Laravel UVT Demo') ?> — UVT Laravel Demo</title>
  <meta name="description" content="Universal Visual Testing — Laravel PHP Demo with Percy integration.">
  <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

<nav class="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">🔴 Laravel UVT Demo</a>
    <div class="nav-links">
      <a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?>">Home</a>
      <a href="/about" class="<?= str_contains($_SERVER['REQUEST_URI'], 'about') ? 'active' : '' ?>">About</a>
      <a href="/services" class="<?= str_contains($_SERVER['REQUEST_URI'], 'services') ? 'active' : '' ?>">Services</a>
      <a href="/projects" class="<?= str_contains($_SERVER['REQUEST_URI'], 'projects') ? 'active' : '' ?>">Projects</a>
      <a href="/team" class="<?= str_contains($_SERVER['REQUEST_URI'], 'team') ? 'active' : '' ?>">Team</a>
      <a href="/blog" class="<?= str_contains($_SERVER['REQUEST_URI'], 'blog') ? 'active' : '' ?>">Blog</a>
      <a href="/portfolio" class="<?= str_contains($_SERVER['REQUEST_URI'], 'portfolio') ? 'active' : '' ?>">Portfolio</a>
      <a href="/contact" class="<?= str_contains($_SERVER['REQUEST_URI'], 'contact') ? 'active' : '' ?>">Contact</a>
    </div>
  </div>
</nav>

<main>
<?= $content ?>
</main>

<footer>
  <p>&copy; <?= date('Y') ?> Laravel UVT Demo &mdash; Built with Laravel-style PHP &amp; Percy Visual Testing</p>
</footer>

</body>
</html>
