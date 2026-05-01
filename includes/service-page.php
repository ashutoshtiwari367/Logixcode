<?php
/**
 * LogixCode – Shared Service Page Template
 * Set all variables in your service PHP file, then include this.
 *
 * Required vars: $pageTitle, $pageDesc, $pageKeywords, $pageUrl,
 *   $serviceName, $heroTag, $heroTitle, $heroSubtitle,
 *   $serviceIntro (array: heading, paras[]),
 *   $features (array of: icon, title, desc),
 *   $processSteps (array of: title, desc),
 *   $technologies (string[]),
 *   $faq (array of: q, a),
 *   $breadcrumbs (for schema)
 *   $serviceSchema (name, desc)
 */
$relatedServices = $relatedServices ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include __DIR__ . '/seo.php'; ?>
  <link rel="icon" href="https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,700;0,9..144,800;1,9..144,700&display=swap" rel="stylesheet">
  <link rel="preload" href="assets/css/style.css" as="style">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/navbar.php'; ?>

<!-- PAGE HERO -->
<div class="pg-hero">
  <div class="pgh-in rv">
    <div class="sp"><?= htmlspecialchars($heroTag) ?></div>
    <h1><?= $heroTitle ?></h1>
    <p><?= htmlspecialchars($heroSubtitle) ?></p>
    <div class="pgh-bc">
      <a href="/new-logixcode/">Home</a> <span>›</span>
      <a href="/new-logixcode/services">Services</a> <span>›</span>
      <span><?= htmlspecialchars($serviceName) ?></span>
    </div>
  </div>
</div>

<!-- SERVICE INTRO -->
<section style="background:var(--bg2)">
  <div class="ab-wrap">
    <div class="ab-img-box rv">
      <div class="ab-img">
        <img src="<?= $serviceImage ?>" alt="<?= htmlspecialchars($serviceName) ?> – LogixCode Kanpur" loading="lazy">
      </div>
    </div>
    <div class="ab-text rv" style="transition-delay:.1s">
      <div class="sp"><?= htmlspecialchars($serviceName) ?></div>
      <h2><?= $serviceIntro['heading'] ?></h2>
      <?php foreach ($serviceIntro['paras'] as $p): ?>
      <p><?= $p ?></p>
      <?php endforeach; ?>
      <div style="margin-top:1.6rem;display:flex;gap:.8rem;flex-wrap:wrap">
        <a href="/new-logixcode/contact" class="bt" style="display:inline-flex">Get Free Quote
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
        </a>
        <a href="tel:+918467898854" class="bto" style="display:inline-flex;padding:.6rem 1.4rem;border:1.5px solid var(--teal);color:var(--teal);border-radius:50px;font-weight:700;font-size:.88rem;transition:all .2s">
          Call Now
        </a>
      </div>
    </div>
  </div>
</section>

<!-- KEY FEATURES -->
<section style="background:var(--bg)" aria-labelledby="feat-h">
  <div class="sh rv">
    <div class="sp">What You Get</div>
    <h2 class="st2" id="feat-h">Key Features &amp; <em>Deliverables</em></h2>
    <div class="sline"></div>
  </div>
  <div class="val-grid">
    <?php foreach ($features as $i => $f): ?>
    <div class="val-card rv" style="transition-delay:<?= $i*0.06 ?>s">
      <div class="val-icon"><svg viewBox="0 0 24 24"><?= $f['icon'] ?></svg></div>
      <div class="val-t"><?= htmlspecialchars($f['title']) ?></div>
      <div class="val-d"><?= htmlspecialchars($f['desc']) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- PROCESS -->
<section style="background:var(--bg2)" aria-labelledby="proc-h">
  <div class="sh rv">
    <div class="sp">How We Work</div>
    <h2 class="st2" id="proc-h">Our <em>Process</em></h2>
    <div class="sline"></div>
  </div>
  <div class="proc-steps">
    <?php foreach ($processSteps as $i => $s): ?>
    <div class="proc-step rv" style="transition-delay:<?= $i*0.07 ?>s">
      <div class="proc-num"><?= $i+1 ?></div>
      <div class="proc-t"><?= htmlspecialchars($s['title']) ?></div>
      <div class="proc-d"><?= htmlspecialchars($s['desc']) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- TECH STACK -->
<?php if (!empty($technologies)): ?>
<section style="background:var(--bg)">
  <div class="sh rv">
    <div class="sp">Technologies</div>
    <h2 class="st2">Tools &amp; <em>Technologies We Use</em></h2>
    <div class="sline"></div>
  </div>
  <div style="display:flex;flex-wrap:wrap;gap:.7rem;justify-content:center;max-width:860px;margin:0 auto" class="rv">
    <?php foreach ($technologies as $tech): ?>
    <span style="padding:.5rem 1.2rem;background:var(--bg2);border:1px solid var(--border);border-radius:50px;font-size:.82rem;font-weight:600;color:var(--ink2)"><?= htmlspecialchars($tech) ?></span>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- FAQ -->
<?php if (!empty($faq)): ?>
<section style="background:var(--bg2)" aria-labelledby="faq-h">
  <div class="sh rv">
    <div class="sp">FAQ</div>
    <h2 class="st2" id="faq-h">Frequently Asked <em>Questions</em></h2>
    <div class="sline"></div>
  </div>
  <div class="faq-list rv" style="transition-delay:.1s">
    <?php foreach ($faq as $item): ?>
    <div class="faq-item">
      <button class="faq-q">
        <?= htmlspecialchars($item['q']) ?>
        <svg viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
      </button>
      <div class="faq-a"><div class="faq-a-in"><?= $item['a'] ?></div></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- CTA -->
<div class="ctas rv">
  <div class="ccp">
    <h2>Ready to Start Your<br><em><?= htmlspecialchars($serviceName) ?></em> Project?</h2>
    <p>Get a free consultation and custom quote from our expert team today.</p>
  </div>
  <div class="cbtns">
    <a href="/new-logixcode/contact" class="bw">Get Free Quote</a>
    <a href="tel:+918467898854" class="bwo">Call: +91 84678 98854</a>
  </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
<?php include __DIR__ . '/schema.php'; ?>
<script src="assets/js/main.js"></script>
</body>
</html>
