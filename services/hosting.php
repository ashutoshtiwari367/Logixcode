<?php
$pageTitle    = "Domain Registration & Web Hosting Services Kanpur | SSL & Cloud – LogixCode";
$pageDesc     = "Reliable domain registration and web hosting in Kanpur by LogixCode. Cloud hosting on AWS/GCP, SSL certificates, cPanel hosting, email hosting & 24/7 support. Get quote!";
$pageKeywords = "web hosting company Kanpur, domain registration Kanpur, SSL certificate Kanpur, cloud hosting UP, cPanel hosting Lucknow, email hosting Uttar Pradesh";
$pageUrl      = "https://www.logixcode.com/hosting";
$serviceName  = "Domain & Hosting";
$heroTag      = "Reliable Web Infrastructure";
$heroTitle    = "Domain &amp; <em>Hosting Services</em> in Kanpur";
$heroSubtitle = "Fast, secure and reliable web hosting with 99.9% uptime — so your website is always online, always fast and always protected.";
$serviceImage = "https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&q=80";

$serviceIntro = [
  'heading' => 'Your Website Online, Always — <em>Rock-Solid Hosting</em>',
  'paras'   => [
    "A great website is useless if it's slow or down. LogixCode provides enterprise-grade hosting solutions on AWS and Hostinger with 99.9% uptime SLA, lightning-fast loading speeds and 24/7 monitoring so you never lose a customer to downtime.",
    "From shared hosting for small businesses to dedicated cloud servers for high-traffic applications, we manage everything — domain registration, DNS setup, SSL installation, email hosting and regular backups — so you can focus on running your business.",
  ],
];

$features = [
  ['icon'=>'<path d="M5 12H3a2 2 0 00-2 2v4a2 2 0 002 2h18a2 2 0 002-2v-4a2 2 0 00-2-2h-2M5 12V8a2 2 0 012-2h10a2 2 0 012 2v4M5 12h14"/>', 'title'=>'Web Hosting', 'desc'=>'Shared, VPS and dedicated hosting plans on high-speed SSD servers with cPanel, 99.9% uptime and free migration.'],
  ['icon'=>'<path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>', 'title'=>'Domain Registration', 'desc'=>'Register .com, .in, .co.in, .net and all other TLDs at competitive prices with free DNS management and WHOIS protection.'],
  ['icon'=>'<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>', 'title'=>'SSL Certificates', 'desc'=>'Free Let\'s Encrypt or paid Comodo SSL certificates installed and auto-renewed — keeping your website secure and Google-trusted.'],
  ['icon'=>'<path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>', 'title'=>'Business Email Hosting', 'desc'=>'Professional email accounts (name@yourcompany.com) with 5–50GB storage, spam protection and mobile sync on all devices.'],
  ['icon'=>'<path d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>', 'title'=>'Daily Backups', 'desc'=>'Automated daily backups stored offsite for 30 days — one-click restore ensures your data is always safe and recoverable.'],
  ['icon'=>'<path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>', 'title'=>'24/7 Monitoring & Support', 'desc'=>'Round-the-clock server monitoring with instant alerts and a dedicated support team available via WhatsApp and email.'],
];

$processSteps = [
  ['title'=>'Requirement Check', 'desc'=>'We assess your website traffic, storage needs and security requirements to recommend the right hosting plan.'],
  ['title'=>'Domain & Hosting Setup', 'desc'=>'Register your domain, configure DNS, set up hosting environment and install SSL in under 24 hours.'],
  ['title'=>'Migration', 'desc'=>'Free migration of your existing website from any host with zero downtime and no data loss.'],
  ['title'=>'Email & Security', 'desc'=>'Configure business email accounts, set up spam filters, firewalls and malware scanning.'],
  ['title'=>'Handover & Training', 'desc'=>'We walk you through your cPanel, email setup and show you how to manage your hosting independently.'],
];

$technologies = ['cPanel','Hostinger','AWS EC2','AWS S3','Cloudflare CDN','Let\'s Encrypt SSL','Comodo SSL','WHM','Plesk','WordPress Hosting','Linux / Ubuntu','NGINX / Apache'];

$faq = [
  ['q'=>'What is the cost of web hosting in Kanpur?', 'a'=>'Shared hosting starts from ₹1,500–₹4,000/year. VPS hosting for higher traffic sites starts from ₹6,000–₹18,000/year. Cloud hosting on AWS/GCP is billed monthly based on usage. We recommend the right plan based on your traffic and needs.'],
  ['q'=>'Will my website be fast?', 'a'=>'Yes. We optimise server configuration, enable caching, use CDN (Cloudflare) and compress images so your website loads in under 2 seconds — critical for both SEO and user experience.'],
  ['q'=>'Can you migrate my existing website to your hosting?', 'a'=>'Yes. We provide free website migration from any current host including GoDaddy, Bluehost, BigRock and others. The process is done with zero downtime.'],
  ['q'=>'What if my website goes down?', 'a'=>'We monitor all hosted websites 24/7. If downtime is detected, our team is automatically alerted and works immediately to restore service — usually within 15–30 minutes for common issues.'],
  ['q'=>'Do you offer annual maintenance plans?', 'a'=>'Yes. Our Annual Maintenance Contract (AMC) starts from ₹5,000/year and covers hosting management, security updates, SSL renewal, backups and minor content changes.'],
];

$breadcrumbs = [['name'=>'Services','url'=>'https://www.logixcode.com/services'],['name'=>'Domain & Hosting','url'=>$pageUrl]];
$serviceSchema = ['name'=>'Domain Registration & Web Hosting', 'desc'=>$pageDesc];

include __DIR__ . '/../includes/service-page.php';
