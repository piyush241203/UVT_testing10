<?php $reqId = 'req-' . substr(md5(microtime()), 0, 8);
$buildTime = date('H:i:s'); ?>
<div class="hero">
  <span class="badge badge-red" style="margin-bottom:1rem; display:inline-block;">🔴 Laravel 11 — UI Round 2 🎯</span>
  <h1>Visual Testing for<br>Laravel Apps</h1>
  <p>Zero-config visual regression testing powered by Percy and UVT. Protect your Laravel UI across every commit.</p>
  <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
    <a href="/services" class="btn btn-primary">Explore Features →</a>
    <a href="/about" class="btn btn-outline">Documentation</a>
  </div>
</div>

<div class="stats-row">
  <div class="stat-card"><span class="stat-value">Laravel</span><span class="stat-label">Framework</span></div>
  <div class="stat-card"><span class="stat-value">8</span><span class="stat-label">Routes Discovered</span></div>
  <div class="stat-card"><span class="stat-value">100%</span><span class="stat-label">Auto Detection</span></div>
  <div class="stat-card"><span class="stat-value">Percy</span><span class="stat-label">Provider</span></div>
</div>

<div class="grid grid-3" style="margin-top:2rem;">
  <div class="card">
    <div class="card-icon">🔍</div>
    <h3>Route Auto-Discovery</h3>
    <p>UVT parses your <code>routes/web.php</code> to automatically find all <code>Route::get()</code> endpoints — no
      config needed.</p>
  </div>
  <div class="card">
    <div class="card-icon">🛡️</div>
    <h3>Blade Template Testing</h3>
    <p>Full support for Blade components, layouts, and partials. Test the actual rendered HTML, not just PHP logic.</p>
  </div>
  <div class="card">
    <div class="card-icon">🚀</div>
    <h3>Artisan Integration</h3>
    <p>UVT detects the <code>artisan</code> file to identify your project as Laravel and configures the correct dev
      server command.</p>
  </div>
</div>

<div class="dynamic-footer" data-uvt-dynamic>
  <small>Request ID: <?= $reqId ?> | Server: <?= $buildTime ?> | Laravel-UVT v1.0</small>
</div>