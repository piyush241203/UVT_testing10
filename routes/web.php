<?php
// Laravel-style routes/web.php
// UVT PhpFrameworkPlugin parses Route::get() definitions from this file.

return [
  '/' => ['view' => 'home', 'data' => ['title' => 'Home']],
  '/about' => ['view' => 'about', 'data' => ['title' => 'About']],
  '/services' => ['view' => 'services', 'data' => ['title' => 'Services']],
  '/projects' => ['view' => 'projects', 'data' => ['title' => 'Projects']],
  '/team' => ['view' => 'team', 'data' => ['title' => 'Team']],
  '/blog' => ['view' => 'blog', 'data' => ['title' => 'Blog']],
  '/portfolio' => ['view' => 'portfolio', 'data' => ['title' => 'Portfolio']],
  '/contact' => ['view' => 'contact', 'data' => ['title' => 'Contact']],
];

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/services', [ServiceController::class, 'index']);
// Route::get('/projects', [ProjectController::class, 'index']);
// Route::get('/team', [TeamController::class, 'index']);
// Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/portfolio', [PortfolioController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'index']);
