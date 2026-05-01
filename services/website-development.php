<?php
$pageTitle    = "Website Development Company in Kanpur | Professional Web Design – LogixCode";
$pageDesc     = "Get a professional, SEO-optimised website from LogixCode — Kanpur's top web development company. Responsive designs, e-commerce, WordPress, Laravel. Starting ₹5,000. Free quote!";
$pageKeywords = "website development company Kanpur, web design Kanpur, e-commerce website Lucknow, WordPress development UP, website developer Kanpur, web development Uttar Pradesh";
$pageUrl      = "https://www.logixcode.com/website-development";
$serviceName  = "Website Development";
$heroTag      = "Web Design & Development";
$heroTitle    = "Professional <em>Website Development</em> in Kanpur";
$heroSubtitle = "Stunning, responsive websites that rank on Google, convert visitors into customers and grow your business — built by Kanpur's most trusted web development team.";
$serviceImage = "https://images.unsplash.com/photo-1547658719-da2b51169166?w=800&q=80";

$serviceIntro = [
  'heading' => 'Websites That Win Customers <em>Online</em>',
  'paras'   => [
    "Your website is your most powerful sales tool — available 24/7. At LogixCode, we design and develop stunning, fast-loading websites that not only look great but also rank on Google and convert visitors into paying customers.",
    "From simple business landing pages to complex e-commerce stores and custom web applications, we deliver pixel-perfect results using modern frameworks like React, Laravel and WordPress — all SEO-ready from day one.",
  ],
];

$features = [
  ['icon'=>'<path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zm12 0a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>', 'title'=>'Responsive Design', 'desc'=>'Every website we build looks perfect on mobile, tablet and desktop — tested across 20+ screen sizes and browsers.'],
  ['icon'=>'<path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>', 'title'=>'SEO-Optimised', 'desc'=>'Built with SEO best practices — semantic HTML, fast loading, Core Web Vitals optimisation, schema markup and sitemap.'],
  ['icon'=>'<path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>', 'title'=>'E-Commerce Stores', 'desc'=>'Full WooCommerce and custom e-commerce stores with payment gateway integration (Razorpay, PayU), cart and order management.'],
  ['icon'=>'<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>', 'title'=>'Secure & Fast', 'desc'=>'SSL certificates, security hardening, caching and CDN integration ensure your website is always safe, fast and reliable.'],
  ['icon'=>'<path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>', 'title'=>'Easy CMS', 'desc'=>'WordPress or custom CMS so you can update content, add pages and manage blogs without any technical knowledge.'],
  ['icon'=>'<path d="M13 10V3L4 14h7v7l9-11h-7z"/>', 'title'=>'Fast Delivery', 'desc'=>'A professional business website in 7–14 days. E-commerce stores in 3–4 weeks. We never miss a deadline.'],
];

$processSteps = [
  ['title'=>'Discovery Call',     'desc'=>'We learn about your business, target audience, competitors and goals to create the right web strategy for you.'],
  ['title'=>'Design Mockup',      'desc'=>'Our designers create a full Figma mockup of your website for your review before development starts.'],
  ['title'=>'Development',        'desc'=>'We code your website using modern technologies with clean, semantic HTML for maximum SEO value.'],
  ['title'=>'Content & SEO',      'desc'=>'We integrate your content, set up on-page SEO, sitemap, robots.txt and Google Search Console.'],
  ['title'=>'Testing & Launch',   'desc'=>'Cross-browser and mobile testing followed by deployment to your hosting with domain configuration.'],
  ['title'=>'Training & Handover','desc'=>'We train you to manage your website and hand over all credentials and documentation.'],
];

$technologies = ['HTML5','CSS3','JavaScript','React.js','Next.js','PHP','Laravel','WordPress','WooCommerce','MySQL','Figma','Google Analytics'];

$faq = [
  ['q'=>'How much does a website cost in Kanpur?', 'a'=>'A basic business website with 5–8 pages starts from ₹5,000–₹15,000. A professional corporate website costs ₹20,000–₹60,000. An e-commerce store starts from ₹35,000. We provide a detailed quote after understanding your exact requirements.'],
  ['q'=>'How long does it take to build a website?', 'a'=>'A business website takes 7–14 days. A corporate website takes 2–4 weeks. An e-commerce store takes 4–6 weeks. Custom web applications take 6–12 weeks depending on features.'],
  ['q'=>'Will my website rank on Google?', 'a'=>'Yes. We build all websites with on-page SEO best practices — fast loading, mobile-first design, proper heading structure, meta tags, schema markup, sitemap.xml and robots.txt. We also set up Google Search Console for you.'],
  ['q'=>'Do you redesign existing websites?', 'a'=>'Absolutely. We offer website redesign services to modernise outdated sites, improve speed, fix SEO issues and improve conversion rates — while preserving your existing Google rankings.'],
  ['q'=>'Will I own the website fully?', 'a'=>'Yes. We transfer complete ownership of all files, databases, domain and hosting to you. You are never locked in with us.'],
];

$breadcrumbs = [['name'=>'Services','url'=>'https://www.logixcode.com/services'],['name'=>'Website Development','url'=>$pageUrl]];
$serviceSchema = ['name'=>'Website Development', 'desc'=>$pageDesc];

include __DIR__ . '/../includes/service-page.php';
