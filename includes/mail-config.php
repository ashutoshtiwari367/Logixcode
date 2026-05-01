<?php
// ============================================================
//  LogixCode – Mail Configuration
//  File   : includes/mail-config.php
//  ⚠️  Fill in your SMTP credentials before deploying to Hostinger
// ============================================================

define('MAIL_HOST',     'smtp.hostinger.com');   // Hostinger SMTP host
define('MAIL_USERNAME', 'info@logixcode.com');   // ← Your full email
define('MAIL_PASSWORD', 'YOUR_EMAIL_PASSWORD');  // ← Change this before deploy
define('MAIL_PORT',      465);                   // 465 = SSL | 587 = TLS
define('MAIL_FROM',     'info@logixcode.com');
define('MAIL_FROM_NAME','LogixCode');
define('MAIL_TO',       'info@logixcode.com');   // Where enquiries are sent
