 v<?php
$pageTitle    = "Terms of Service – LogixCode";
$pageDesc     = "Terms and conditions for using LogixCode's services and website. Please read carefully before using our services.";
$pageUrl      = "https://www.logixcode.com/terms-conditions";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include __DIR__ . '/includes/seo.php'; ?>
  <link rel="icon" href="https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,700;0,9..144,800;1,9..144,700&display=swap" rel="stylesheet">
  <link rel="preload" href="assets/css/style.css" as="style">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/includes/navbar.php'; ?>

<!-- PAGE HERO -->
<div class="pg-hero">
  <div class="pgh-in rv">
    <div class="sp">Legal Information</div>
    <h1>Terms of <em>Service</em></h1>
    <p>Last updated: April 30, 2026</p>
    <div class="pgh-bc"><a href="/new-logixcode/">Home</a> <span>›</span> <span>Terms & Conditions</span></div>
  </div>
</div>

<!-- CONTENT -->
<section style="background:var(--bg2)">
  <div class="rv" style="max-width:860px;margin:0 auto;color:var(--ink2);line-height:1.8;font-size:1rem;">
    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;">1. Agreement to Terms</h2>
    <p style="margin-bottom:1.5rem;">These Terms of Service constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and LogixCode ("Company", “we”, “us”, or “our”), concerning your access to and use of the https://www.logixcode.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">2. Intellectual Property Rights</h2>
    <p style="margin-bottom:1.5rem;">Unless otherwise indicated, the Site is our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">3. User Representations</h2>
    <p style="margin-bottom:1.5rem;">By using the Site, you represent and warrant that: (1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration information as necessary; (3) you have the legal capacity and you agree to comply with these Terms of Service.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">4. Prohibited Activities</h2>
    <p style="margin-bottom:1.5rem;">You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">5. Service Delivery and Payment</h2>
    <p style="margin-bottom:1.5rem;">For custom software development, website development, and digital marketing services, specific terms of service delivery, milestones, and payment schedules will be outlined in a separate Service Level Agreement (SLA) or contract signed between the client and LogixCode.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">6. Modifications and Interruptions</h2>
    <p style="margin-bottom:1.5rem;">We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Site without notice at any time.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">7. Governing Law</h2>
    <p style="margin-bottom:1.5rem;">These conditions are governed by and interpreted following the laws of India, and the use of the United Nations Convention of Contracts for the International Sale of Goods is expressly excluded. If your habitual residence is in the EU, and you are a consumer, you additionally possess the protection provided to you by obligatory provisions of the law of your country of residence.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">8. Contact Us</h2>
    <p style="margin-bottom:1.5rem;">In order to resolve a complaint regarding the Site or to receive further information regarding use of the Site, please contact us at:</p>
    <p style="background:var(--bg);padding:1.5rem;border-radius:12px;border:1px solid var(--border);color:var(--ink);">
      <strong>LogixCode</strong><br>
      2/1 Koyla Nagar, Swarn Jayanti Vihar<br>
      Kanpur, Uttar Pradesh – 208013<br>
      India<br>
      Email: info@logixcode.com<br>
      Phone: +91 84678 98854
    </p>
  </div>
</section>

<?php
$breadcrumbs = [['name'=>'Terms of Service','url'=>$pageUrl]];
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/schema.php';
?>
<script src="assets/js/main.js"></script>
</body>
</html>
