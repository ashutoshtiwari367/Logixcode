<?php
$pageTitle    = "Privacy Policy – LogixCode";
$pageDesc     = "Privacy Policy for LogixCode. Read how we collect, use, and protect your personal data.";
$pageUrl      = "https://www.logixcode.com/privacy-policy";
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
    <h1>Privacy <em>Policy</em></h1>
    <p>Last updated: April 30, 2026</p>
    <div class="pgh-bc"><a href="/new-logixcode/">Home</a> <span>›</span> <span>Privacy Policy</span></div>
  </div>
</div>

<!-- CONTENT -->
<section style="background:var(--bg2)">
  <div class="rv" style="max-width:860px;margin:0 auto;color:var(--ink2);line-height:1.8;font-size:1rem;">
    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;">1. Introduction</h2>
    <p style="margin-bottom:1.5rem;">Welcome to LogixCode. We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your personal information, please contact us at info@logixcode.com.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">2. Information We Collect</h2>
    <p style="margin-bottom:1rem;">We collect personal information that you voluntarily provide to us when you register on the Website, express an interest in obtaining information about us or our products and Services, or otherwise when you contact us. The personal information that we collect depends on the context of your interactions with us and the Website, the choices you make and the products and features you use. The personal information we collect may include the following:</p>
    <ul style="margin-bottom:1.5rem;padding-left:1.5rem;">
      <li style="margin-bottom:.5rem;"><strong>Publicly Available Personal Information:</strong> We collect first names, maiden names, last names, nicknames, phone numbers, email addresses, business email, business phone number, and other similar data.</li>
      <li style="margin-bottom:.5rem;"><strong>Credentials:</strong> We collect passwords, password hints, and similar security information used for authentication and account access.</li>
    </ul>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">3. How We Use Your Information</h2>
    <p style="margin-bottom:1.5rem;">We use personal information collected via our Website for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations.</p>
    <ul style="margin-bottom:1.5rem;padding-left:1.5rem;">
      <li style="margin-bottom:.5rem;">To facilitate account creation and logon process.</li>
      <li style="margin-bottom:.5rem;">To send you marketing and promotional communications.</li>
      <li style="margin-bottom:.5rem;">To fulfill and manage your orders for services.</li>
      <li style="margin-bottom:.5rem;">To request feedback and to contact you about your use of our Website.</li>
    </ul>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">4. Will Your Information be Shared with Anyone?</h2>
    <p style="margin-bottom:1.5rem;">We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations. We may process or share data based on the following legal basis:</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">5. Do We Use Cookies and Other Tracking Technologies?</h2>
    <p style="margin-bottom:1.5rem;">We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Policy.</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">6. How Long Do We Keep Your Information?</h2>
    <p style="margin-bottom:1.5rem;">We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy policy, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements).</p>

    <h2 style="font-family:var(--fd);font-size:1.6rem;color:var(--ink);margin-bottom:1rem;margin-top:2.5rem;">7. Contact Us</h2>
    <p style="margin-bottom:1.5rem;">If you have questions or comments about this policy, you may email us at info@logixcode.com or by post to:</p>
    <p style="background:var(--bg);padding:1.5rem;border-radius:12px;border:1px solid var(--border);color:var(--ink);">
      <strong>LogixCode</strong><br>
      2/1 Koyla Nagar, Swarn Jayanti Vihar<br>
      Kanpur, Uttar Pradesh – 208013<br>
      India
    </p>
  </div>
</section>

<?php
$breadcrumbs = [['name'=>'Privacy Policy','url'=>$pageUrl]];
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/schema.php';
?>
<script src="assets/js/main.js"></script>
</body>
</html>
