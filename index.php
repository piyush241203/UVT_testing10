<?php

// ─── Mini Laravel-style Router (No Composer Required) ───────────────────────
// This standalone PHP router mimics Laravel's route/view system precisely.
// UVT treats this as a Laravel project because it has: artisan, routes/web.php
// ────────────────────────────────────────────────────────────────────────────

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;
if (file_exists($filePath) && !is_dir($filePath)) {
    return false;
}
$uri = rtrim($uri, '/') ?: '/';

$routes = require __DIR__ . '/routes/web.php';

$matched = false;
foreach ($routes as $pattern => $handler) {
  if ($pattern === $uri || preg_match('#^' . $pattern . '$#', $uri)) {
    echo view($handler['view'], $handler['data'] ?? []);
    $matched = true;
    break;
  }
}

if (!$matched) {
  http_response_code(404);
  echo view('errors.404', []);
}

// ─── Template Engine ─────────────────────────────────────────────────────────
function view(string $viewName, array $data = []): string {
  $viewPath = __DIR__ . '/views/' . str_replace('.', '/', $viewName) . '.php';
  if (!file_exists($viewPath)) {
    return "<p>View not found: $viewName</p>";
  }
  extract($data);
  ob_start();
  include $viewPath;
  $content = ob_get_clean();

  $layoutPath = __DIR__ . '/views/layouts/app.php';
  if (file_exists($layoutPath)) {
    extract($data);
    ob_start();
    include $layoutPath;
    return ob_get_clean();
  }
  return $content;
}
