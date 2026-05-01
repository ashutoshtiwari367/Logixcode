<?php
/**
 * LogixCode – Universal SEO Head Tags
 * Include AFTER setting: $pageTitle, $pageDesc, $pageKeywords, $pageUrl
 */
$_ogImg = 'https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp';
?>
<title><?= htmlspecialchars($pageTitle ?? 'LogixCode') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc ?? '') ?>">
<?php if (!empty($pageKeywords)): ?>
<meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
<?php endif; ?>
<meta name="robots" content="index,follow">
<meta name="author" content="LogixCode">
<meta name="geo.region" content="IN-UP">
<meta name="geo.placename" content="Kanpur, Uttar Pradesh">
<meta name="geo.position" content="26.4499;80.3319">
<meta name="ICBM" content="26.4499, 80.3319">
<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="LogixCode">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? '') ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDesc ?? '') ?>">
<meta property="og:image" content="<?= $_ogImg ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="<?= htmlspecialchars($pageUrl ?? '') ?>">
<meta property="og:locale" content="en_IN">
<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle ?? '') ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($pageDesc ?? '') ?>">
<meta name="twitter:image" content="<?= $_ogImg ?>">
<meta name="twitter:site" content="@logixcode">
<!-- Canonical -->
<link rel="canonical" href="<?= htmlspecialchars($pageUrl ?? '') ?>">
