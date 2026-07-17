// Universal Visual Testing (UVT) Configuration for Laravel
export default {
  provider: 'percy',
  framework: 'php',
  cache: true,
  workers: 'auto',
  report: { html: true, json: true },
  dynamicDetection: true,
  server: {
    port: 8000,
    startCommand: 'php artisan serve --port=8000',
  }
};
