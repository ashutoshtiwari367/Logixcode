<?php
// ── BOOT ────────────────────────────────────────────────────────────────────
session_start();
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}
if (file_exists(__DIR__ . '/includes/mail-config.php')) {
    require_once __DIR__ . '/includes/mail-config.php';
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// ── CAPTCHA HELPER ───────────────────────────────────────────────────────────
function genCaptcha() {
    $a = rand(1, 9);
    $b = rand(1, 9);
    $_SESSION['cap_a']   = $a;
    $_SESSION['cap_b']   = $b;
    $_SESSION['cap_ans'] = $a + $b;
}
if (!isset($_SESSION['cap_ans'])) genCaptcha();

// ── FORM HANDLING ────────────────────────────────────────────────────────────
$success = false;
$errors  = [];
$old     = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitise
    $old['fname']   = htmlspecialchars(strip_tags(trim($_POST['fname']   ?? '')));
    $old['lname']   = htmlspecialchars(strip_tags(trim($_POST['lname']   ?? '')));
    $old['email']   = trim($_POST['email']   ?? '');
    $old['phone']   = htmlspecialchars(strip_tags(trim($_POST['phone']   ?? '')));
    $old['service'] = htmlspecialchars(strip_tags(trim($_POST['service'] ?? '')));
    $old['budget']  = htmlspecialchars(strip_tags(trim($_POST['budget']  ?? '')));
    $old['message'] = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')));
    $capInput       = trim($_POST['captcha'] ?? '');

    // Validate
    if (empty($old['fname']))
        $errors[] = 'First name is required.';
    if (empty($old['email']) || !filter_var($old['email'], FILTER_VALIDATE_EMAIL))
        $errors[] = 'A valid email address is required.';
    if (empty($old['message']))
        $errors[] = 'Please write a message.';
    if ((int)$capInput !== (int)$_SESSION['cap_ans'])
        $errors[] = 'Incorrect security answer — please try again.';

    if (empty($errors)) {

        if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            $errors[] = 'PHPMailer is not installed. Please run composer install or upload vendor folder.';
        } else {
            // ── SEND WITH PHPMAILER ──────────────────────────────────────────
            $mail = new PHPMailer(true);
            try {
            // Server
            $mail->isSMTP();
            $mail->Host        = MAIL_HOST;
            $mail->SMTPAuth    = true;
            $mail->Username    = MAIL_USERNAME;
            $mail->Password    = MAIL_PASSWORD;
            $mail->SMTPSecure  = PHPMailer::ENCRYPTION_SMTPS; // SSL on port 465
            $mail->Port        = MAIL_PORT;
            $mail->CharSet     = 'UTF-8';

            // From / To
            $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
            $mail->addAddress(MAIL_TO, 'LogixCode Enquiries');
            $mail->addReplyTo($old['email'], $old['fname'] . ' ' . $old['lname']);

            // Content
            $mail->isHTML(true);
            $mail->Subject = "New Enquiry from {$old['fname']} {$old['lname']} – LogixCode";
            $mail->Body    = "
            <html><body style='font-family:Arial,sans-serif;color:#0d1520;max-width:600px'>
              <div style='background:#029eaa;padding:18px 24px;border-radius:8px 8px 0 0'>
                <h2 style='color:#fff;margin:0'>New Website Enquiry</h2>
              </div>
              <div style='background:#f6f8fd;padding:24px;border:1px solid #dde2f0;border-top:none;border-radius:0 0 8px 8px'>
                <table style='width:100%;border-collapse:collapse'>
                  <tr><td style='padding:8px 0;color:#6b7a99;width:120px'>Name</td>
                    <td style='padding:8px 0;font-weight:600'>{$old['fname']} {$old['lname']}</td></tr>
                  <tr><td style='padding:8px 0;color:#6b7a99'>Email</td>
                    <td style='padding:8px 0'><a href='mailto:{$old['email']}'>{$old['email']}</a></td></tr>
                  <tr><td style='padding:8px 0;color:#6b7a99'>Phone</td>
                    <td style='padding:8px 0'>{$old['phone']}</td></tr>
                  <tr><td style='padding:8px 0;color:#6b7a99'>Service</td>
                    <td style='padding:8px 0'>{$old['service']}</td></tr>
                  <tr><td style='padding:8px 0;color:#6b7a99'>Budget</td>
                    <td style='padding:8px 0'>{$old['budget']}</td></tr>
                </table>
                <div style='margin-top:16px;padding:14px;background:#fff;border:1px solid #dde2f0;border-radius:8px'>
                  <strong>Message:</strong><br><br>
                  " . nl2br($old['message']) . "
                </div>
                <p style='margin-top:20px;font-size:12px;color:#9090a8'>Sent from logixcode.com/contact</p>
              </div>
            </body></html>";

            $mail->AltBody = "Name: {$old['fname']} {$old['lname']}\nEmail: {$old['email']}\nPhone: {$old['phone']}\nService: {$old['service']}\nBudget: {$old['budget']}\n\nMessage:\n{$old['message']}";

            $mail->send();
            $success = true;
            $old = [];
            genCaptcha();

        } catch (Exception $e) {
            $errors[] = 'Mail error: ' . $mail->ErrorInfo;
        }
       }
    } else {
        genCaptcha(); // Regenerate on any error
    }
}

$cap_a = $_SESSION['cap_a'];
$cap_b = $_SESSION['cap_b'];

// ── META ─────────────────────────────────────────────────────────────────────
$pageTitle = "Contact Us – LogixCode | Get a Free IT Consultation in Kanpur";
$pageDesc  = "Contact LogixCode for a free IT consultation. Call +91 84678 98854 or email info@logixcode.com. Based in Kanpur, serving across UP. We reply in 2 hours.";
$pageUrl   = "https://www.logixcode.com/contact";
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
  <style>
    .alert{padding:1rem 1.2rem;border-radius:10px;font-size:.9rem;font-weight:600;margin-bottom:1.4rem;display:flex;align-items:flex-start;gap:.6rem}
    .alert-success{background:#e6f9f2;border:1px solid #00b87a;color:#006b47}
    .alert-error  {background:#fff0f0;border:1px solid #f87171;color:#b91c1c}
    .alert svg{width:20px;height:20px;flex-shrink:0;margin-top:1px;stroke:currentColor;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
    .captcha-wrap{display:flex;align-items:center;gap:.8rem;flex-wrap:wrap}
    .captcha-eq{font-family:var(--fd);font-size:1.15rem;font-weight:800;color:var(--ink);white-space:nowrap;background:var(--teal-lt);border:1px solid rgba(2,158,170,.25);padding:.5rem 1rem;border-radius:8px}
    .captcha-wrap input{max-width:90px;text-align:center;font-size:1rem;font-weight:700}
    .captcha-hint{font-size:.75rem;color:var(--ink3);margin-top:.35rem}
  </style>
</head>
<body>

<?php include __DIR__ . '/includes/navbar.php'; ?>

<!-- PAGE HERO -->
<div class="pg-hero">
  <div class="pgh-in rv">
    <div class="sp">Get In Touch</div>
    <h1>Contact <em>LogixCode</em></h1>
    <p>Have a project in mind? We'd love to hear about it. Reach out and we'll get back to you within 2 hours.</p>
    <div class="pgh-bc"><a href="<?= $base_url ?>">Home</a> <span>›</span> <span>Contact</span></div>
  </div>
</div>

<!-- CONTACT SECTION -->
<section style="background:var(--bg)">
  <div class="contact-wrap rv">

    <!-- ── FORM ─────────────────────────────────────────────────────── -->
    <div class="cf">
      <h3>Send Us a Message</h3>

      <?php if ($success): ?>
      <div class="alert alert-success">
        <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div><strong>Message sent!</strong> Thank you, we'll reply within 2 hours.</div>
      </div>
      <?php endif; ?>

      <?php if (!empty($errors)): ?>
      <div class="alert alert-error">
        <svg viewBox="0 0 24 24"><path d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <div><?php foreach ($errors as $e) echo "<div>$e</div>"; ?></div>
      </div>
      <?php endif; ?>

      <form method="POST" action="" novalidate>

        <div class="form-row">
          <div class="form-group">
            <label for="fname">First Name *</label>
            <input type="text" id="fname" name="fname" placeholder="Rahul" required
              value="<?= htmlspecialchars($old['fname'] ?? '') ?>">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Sharma"
              value="<?= htmlspecialchars($old['lname'] ?? '') ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" id="email" name="email" placeholder="rahul@yourcompany.com" required
            value="<?= htmlspecialchars($old['email'] ?? '') ?>">
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210"
            value="<?= htmlspecialchars($old['phone'] ?? '') ?>">
        </div>

        <div class="form-group">
          <label for="service">Service Interested In</label>
          <select id="service" name="service">
            <?php
            $services = ['','Software Development','Website Development','Mobile App Development',
              'Digital Marketing & SEO','ERP & CRM Development','AI & ML Solutions',
              'Graphics & UI/UX Design','Domain & Hosting','Other'];
            foreach ($services as $s):
              $sel = (($old['service'] ?? '') === $s) ? 'selected' : '';
            ?>
            <option value="<?= $s ?>" <?= $sel ?>><?= $s ?: 'Select a service…' ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="budget">Estimated Budget</label>
          <select id="budget" name="budget">
            <?php
            $budgets = ['','Under ₹25,000','₹25,000 – ₹50,000','₹50,000 – ₹1,00,000',
              '₹1,00,000 – ₹3,00,000','Above ₹3,00,000'];
            foreach ($budgets as $b):
              $sel = (($old['budget'] ?? '') === $b) ? 'selected' : '';
            ?>
            <option value="<?= $b ?>" <?= $sel ?>><?= $b ?: 'Select budget range…' ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Your Message *</label>
          <textarea id="message" name="message" placeholder="Tell us about your project, goals and timeline…" required><?= htmlspecialchars($old['message'] ?? '') ?></textarea>
        </div>

        <!-- ── MATH CAPTCHA ─────────────────────────────────────────── -->
        <div class="form-group">
          <label>Security Check *</label>
          <div class="captcha-wrap">
            <span class="captcha-eq"><?= $cap_a ?> + <?= $cap_b ?> = ?</span>
            <input type="number" name="captcha" id="captcha" placeholder="?"
              min="0" max="18" autocomplete="off" required>
          </div>
          <div class="captcha-hint">Solve the sum above to verify you're human.</div>
        </div>

        <button type="submit" class="form-submit">Send Message &rarr;</button>

      </form>
    </div>

    <!-- ── CONTACT INFO ──────────────────────────────────────────────── -->
    <div class="contact-info rv" style="transition-delay:.12s">

      <div class="ci-card">
        <div class="ci-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
        </div>
        <div>
          <div class="ci-label">Phone</div>
          <div class="ci-val"><a href="tel:+918467898854">+91 84678 98854</a></div>
          <div class="ci-val" style="font-size:.8rem;color:var(--ink3);font-weight:400">Mon–Sat, 9 AM – 7 PM IST</div>
        </div>
      </div>

      <div class="ci-card">
        <div class="ci-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
        </div>
        <div>
          <div class="ci-label">Email</div>
          <div class="ci-val"><a href="mailto:info@logixcode.com">info@logixcode.com</a></div>
          <div class="ci-val" style="font-size:.8rem;color:var(--ink3);font-weight:400">We reply within 2 hours</div>
        </div>
      </div>

      <div class="ci-card">
        <div class="ci-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
        </div>
        <div>
          <div class="ci-label">Office</div>
          <div class="ci-val">2/1 Koyla Nagar, Swarn Jayanti Vihar,<br>Kanpur, Uttar Pradesh – 208013</div>
        </div>
      </div>

      <div class="ci-card">
        <div class="ci-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
          </svg>
        </div>
        <div>
          <div class="ci-label">Working Hours</div>
          <div class="ci-val">Monday – Saturday<br>9:00 AM – 7:00 PM IST</div>
        </div>
      </div>

      <div class="map-box">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.4!2d80.3319!3d26.4499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c477b81b47a49%3A0x7d3ac0c8e37e55e6!2sKoyla%20Nagar%2C%20Kanpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1714000000000"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          title="LogixCode Office – Kanpur">
        </iframe>
      </div>

    </div>

  </div>
</section>

<!-- WHAT HAPPENS NEXT -->
<section style="background:var(--bg2)">
  <div class="sh rv">
    <div class="sp">Our Process</div>
    <h2 class="st2">What Happens After <em>You Contact Us?</em></h2>
    <div class="sline"></div>
  </div>
  <div class="proc-steps">
    <div class="proc-step rv" style="transition-delay:.04s">
      <div class="proc-num">1</div>
      <div class="proc-t">Free Consultation</div>
      <div class="proc-d">Within 2 hours our expert calls you to understand your requirements — no cost, no obligation.</div>
    </div>
    <div class="proc-step rv" style="transition-delay:.10s">
      <div class="proc-num">2</div>
      <div class="proc-t">Custom Proposal</div>
      <div class="proc-d">Detailed proposal with timeline, tech stack and transparent pricing. Zero hidden costs.</div>
    </div>
    <div class="proc-step rv" style="transition-delay:.16s">
      <div class="proc-num">3</div>
      <div class="proc-t">Project Kickoff</div>
      <div class="proc-d">Dedicated team assigned and work begins with a structured kickoff meeting immediately.</div>
    </div>
    <div class="proc-step rv" style="transition-delay:.22s">
      <div class="proc-num">4</div>
      <div class="proc-t">Regular Updates</div>
      <div class="proc-d">Weekly demos and progress reports — you're always in full control of your project.</div>
    </div>
  </div>
</section>

<?php
$breadcrumbs = [['name'=>'Contact','url'=>$pageUrl]];
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/schema.php';
?>
<script src="assets/js/main.js"></script>
</body>
</html>
