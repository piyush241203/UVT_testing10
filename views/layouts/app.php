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

<!-- TCSE/ADE: Cookie Consent Banner — .cookie-banner, #cookie-consent -->
<div id="cookie-consent" class="cookie-banner" style="position:fixed;bottom:0;left:0;right:0;background:#1f2937;color:#f9fafb;padding:14px 24px;display:flex;align-items:center;justify-content:space-between;z-index:9999;gap:16px;flex-wrap:wrap;">
  <p style="margin:0;font-size:13px;">This Laravel application uses cookies for analytics and personalized ads. <strong>Cookie Policy</strong></p>
  <div style="display:flex;gap:8px;">
    <button onclick="this.closest('#cookie-consent').remove()" style="padding:7px 14px;background:#ef4444;color:#fff;border:none;border-radius:6px;cursor:pointer;font-weight:600;font-size:12px;">Accept All</button>
    <button onclick="this.closest('#cookie-consent').remove()" style="padding:7px 14px;background:transparent;color:#9ca3af;border:1px solid #4b5563;border-radius:6px;cursor:pointer;font-size:12px;">Decline</button>
  </div>
</div>

<!-- TCSE/ADE: Chat Widget — .chat-widget, #chat-button -->
<div class="chat-widget" style="position:fixed;bottom:80px;right:20px;z-index:9998;">
  <div id="lv-chat" style="display:none;width:250px;height:270px;background:#fff;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,0.15);padding:14px;margin-bottom:8px;flex-direction:column;gap:8px;">
    <div style="font-weight:700;font-size:13px;color:#1f2937;">Laravel Support</div>
    <div style="flex:1;background:#f9fafb;border-radius:8px;padding:8px;font-size:12px;color:#6b7280;">Hi! How can we help with your Laravel project?</div>
    <input placeholder="Type message..." style="padding:6px;border:1px solid #e5e7eb;border-radius:6px;font-size:12px;" />
  </div>
  <button id="chat-button" onclick="var p=document.getElementById('lv-chat');p.style.display=p.style.display==='flex'?'none':'flex';" style="width:48px;height:48px;border-radius:50%;background:#ef4444;color:#fff;border:none;font-size:13px;cursor:pointer;display:block;margin-left:auto;box-shadow:0 4px 12px rgba(239,68,68,0.4);font-weight:700;">Chat</button>
</div>

<!-- TCSE/ADE: Floating Promotion — .floating-ad, .sticky-ad -->
<div id="lv-promo" class="floating-ad sticky-ad" aria-label="Promotional offer" style="position:fixed;bottom:140px;right:20px;z-index:9997;background:linear-gradient(135deg,#ef4444,#dc2626);color:#fff;border-radius:12px;padding:12px 16px;width:185px;box-shadow:0 8px 24px rgba(239,68,68,0.4);">
  <button onclick="document.getElementById('lv-promo').remove()" style="position:absolute;top:6px;right:8px;background:none;border:none;color:rgba(255,255,255,0.7);font-size:13px;cursor:pointer;">x</button>
  <div style="font-weight:800;font-size:13px;margin-bottom:3px;">Laravel Forge Pro</div>
  <div style="font-size:11px;opacity:0.9;margin-bottom:8px;">25% Off — Limited Offer</div>
  <button style="width:100%;padding:6px;background:#fff;color:#ef4444;border:none;border-radius:6px;font-weight:700;font-size:11px;cursor:pointer;">Get Offer</button>
</div>

<nav class="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">Laravel UVT Demo</a>
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

<!-- TCSE/ADE: Leaderboard Ad (IAB 728x90) — .ad-banner -->
<div class="ad-banner" aria-label="Advertisement" role="complementary" style="max-width:728px;height:90px;margin:12px auto;background:linear-gradient(135deg,#fef2f2,#fee2e2);border:1px solid #fca5a5;border-radius:8px;display:flex;align-items:center;justify-content:space-between;padding:0 20px;gap:12px;box-sizing:border-box;">
  <span style="font-weight:700;color:#991b1b;font-size:13px;">Laravel Vapor — Serverless Deployment. Start Free Today.</span>
  <span style="background:#7f1d1d;color:#fca5a5;font-size:10px;padding:3px 8px;border-radius:12px;white-space:nowrap;">Sponsored</span>
  <button style="padding:8px 14px;background:#dc2626;color:#fff;border:none;border-radius:6px;font-weight:600;cursor:pointer;font-size:12px;white-space:nowrap;">Try Free</button>
</div>

<!-- TCSE/ADE: Sponsored Content Cards — .sponsored-content -->
<div class="sponsored-content" aria-label="Sponsored content" style="max-width:900px;margin:0 auto 12px;display:grid;grid-template-columns:repeat(2,1fr);gap:12px;">
  <div style="border:1px solid #e5e7eb;border-radius:8px;padding:14px;background:#fff;box-shadow:0 2px 4px rgba(0,0,0,0.04);">
    <div style="font-size:9px;color:#9ca3af;text-transform:uppercase;letter-spacing:1px;margin-bottom:4px;">Sponsored · Laravel Forge</div>
    <div style="font-weight:700;color:#111827;font-size:14px;margin-bottom:4px;">Provision &amp; Deploy Servers</div>
    <div style="font-size:12px;color:#6b7280;margin-bottom:8px;">Manage any number of servers from one dashboard.</div>
    <button style="padding:6px 12px;background:#ef4444;color:#fff;border:none;border-radius:5px;font-size:11px;font-weight:600;cursor:pointer;">Learn More</button>
  </div>
  <div style="border:1px solid #e5e7eb;border-radius:8px;padding:14px;background:#fff;box-shadow:0 2px 4px rgba(0,0,0,0.04);">
    <div style="font-size:9px;color:#9ca3af;text-transform:uppercase;letter-spacing:1px;margin-bottom:4px;">Sponsored · Chipper CI</div>
    <div style="font-weight:700;color:#111827;font-size:14px;margin-bottom:4px;">CI/CD for Laravel Apps</div>
    <div style="font-size:12px;color:#6b7280;margin-bottom:8px;">The fastest CI/CD for PHP &amp; Laravel projects.</div>
    <button style="padding:6px 12px;background:#6366f1;color:#fff;border:none;border-radius:5px;font-size:11px;font-weight:600;cursor:pointer;">Start Free</button>
  </div>
</div>

<main>
<?= $content ?>
</main>

<footer>
  <p>&copy; <?= date('Y') ?> Laravel UVT Demo &mdash; Built with Laravel-style PHP &amp; Percy Visual Testing — TCSE Certified</p>
</footer>

<script>
  // TCSE: Newsletter popup — delayed (simulates Klaviyo/Mailchimp)
  setTimeout(function() {
    var popup = document.createElement('div');
    popup.className = 'newsletter-popup';
    popup.setAttribute('role', 'dialog');
    popup.style.cssText = 'position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);background:#fff;border-radius:16px;padding:28px;width:340px;box-shadow:0 20px 60px rgba(0,0,0,0.2);z-index:10000;color:#1f2937;';
    popup.innerHTML = '<button onclick="this.parentElement.remove()" style="position:absolute;top:10px;right:12px;background:none;border:none;font-size:18px;cursor:pointer;color:#9ca3af;">x</button><h3 style="margin:0 0 8px;font-size:20px;font-weight:800;">Laravel Weekly</h3><p style="margin:0 0 14px;color:#6b7280;font-size:13px;">Get Laravel tips, packages, and deals weekly.</p><input placeholder="your@email.com" style="width:100%;padding:9px 12px;border:1px solid #e5e7eb;border-radius:7px;font-size:13px;margin-bottom:10px;box-sizing:border-box;" /><button style="width:100%;padding:10px;background:#ef4444;color:#fff;border:none;border-radius:8px;font-weight:700;cursor:pointer;font-size:14px;">Subscribe</button>';
    document.body.appendChild(popup);
  }, 4000);
</script>

</body>
</html>
