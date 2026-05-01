<?php 
$base_url = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || $_SERVER['HTTP_HOST'] === '127.0.0.1') ? '/new-logixcode/' : '/';
$pg = basename($_SERVER['PHP_SELF'], '.php'); 
?>
<div class="top-bar">
  <div class="tb-wrap">
    <a href="tel:+918467898854" class="tb-item">
      <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
      +91 84678 98854
    </a>
    <a href="https://training.logixcode.com/" class="tb-item tb-train" target="_blank" rel="noopener">
       Training Website
      <svg viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
    </a>
  </div>
</div>
<nav id="nb" role="navigation" aria-label="Main navigation">
  <a href="<?= $base_url ?>" class="logo" aria-label="LogixCode Home">
    <img src="https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp" alt="LogixCode">
    Logix<span>Code</span>
  </a>

  <ul class="nlinks" id="nl" role="menubar">
    <li><a href="<?= $base_url ?>" <?= $pg==='index' ? 'class="ac"' : '' ?> role="menuitem">Home</a></li>

    <!-- SERVICES WITH MEGA DROPDOWN -->
    <li class="has-drop">
      <a href="<?= $base_url ?>services" <?= $pg==='services' ? 'class="ac"' : '' ?> role="menuitem">
        Services
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
      </a>
      <div class="mega-drop" role="menu">
        <div class="mega-grid">
          <a href="<?= $base_url ?>software-development" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg></div>
            <div><div class="mega-t">Software Development</div><div class="mega-d">Custom ERP, CRM &amp; enterprise apps</div></div>
          </a>
          <a href="<?= $base_url ?>website-development" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
            <div><div class="mega-t">Website Development</div><div class="mega-d">Responsive &amp; SEO-optimised websites</div></div>
          </a>
          <a href="<?= $base_url ?>mobile-app-development" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
            <div><div class="mega-t">Mobile App Development</div><div class="mega-d">iOS &amp; Android cross-platform apps</div></div>
          </a>
          <a href="<?= $base_url ?>digital-marketing" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div>
            <div><div class="mega-t">Digital Marketing</div><div class="mega-d">SEO, Google Ads &amp; social media</div></div>
          </a>
          <a href="<?= $base_url ?>erp-crm" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg></div>
            <div><div class="mega-t">ERP &amp; CRM</div><div class="mega-d">Business automation &amp; management</div></div>
          </a>
          <a href="<?= $base_url ?>graphics-design" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></div>
            <div><div class="mega-t">Graphics &amp; UI/UX Design</div><div class="mega-d">Brand identity &amp; product design</div></div>
          </a>
          <a href="<?= $base_url ?>ai-ml" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18"/></svg></div>
            <div><div class="mega-t">AI &amp; Machine Learning</div><div class="mega-d">Chatbots, NLP &amp; smart automation</div></div>
          </a>
          <a href="<?= $base_url ?>hosting" class="mega-item">
            <div class="mega-icon"><svg viewBox="0 0 24 24"><path d="M5 12H3a2 2 0 00-2 2v4a2 2 0 002 2h18a2 2 0 002-2v-4a2 2 0 00-2-2h-2M5 12V8a2 2 0 012-2h10a2 2 0 012 2v4M5 12h14"/></svg></div>
            <div><div class="mega-t">Domain &amp; Hosting</div><div class="mega-d">Cloud hosting, SSL &amp; 24/7 support</div></div>
          </a>
        </div>
        <div class="mega-footer">
          <a href="<?= $base_url ?>services">View All Services &rarr;</a>
        </div>
      </div>
    </li>
    <li><a href="<?= $base_url ?>about" <?= $pg==='about' ? 'class="ac"' : '' ?> role="menuitem">About</a></li>
    <li><a href="<?= $base_url ?>industries" <?= $pg==='industries' ? 'class="ac"' : '' ?> role="menuitem">Industries</a></li>
    <li><a href="<?= $base_url ?>portfolio" <?= $pg==='portfolio' ? 'class="ac"' : '' ?> role="menuitem">Portfolio</a></li>
    <li><a href="<?= $base_url ?>blog" <?= $pg==='index' && strpos($_SERVER['REQUEST_URI'], 'blog') !== false ? 'class="ac"' : ($pg==='blog' ? 'class="ac"' : '') ?> role="menuitem">Blog</a></li>
    <li><a href="<?= $base_url ?>contact" <?= $pg==='contact' ? 'class="ac"' : '' ?> role="menuitem">Contact</a></li>
  </ul>

  <a href="<?= $base_url ?>contact" class="ncta">Get Quote</a>

  <button class="hbg" id="hb" aria-label="Toggle menu" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>
</nav>
