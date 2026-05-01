<?php
$pageTitle    = "Mobile App Development Company Kanpur | iOS & Android Apps – LogixCode";
$pageDesc     = "LogixCode builds custom iOS & Android mobile apps in Kanpur using Flutter & React Native. Fast delivery, expert team. From idea to App Store in 30–60 days. Get free quote!";
$pageKeywords = "mobile app development company Kanpur, Android app development Lucknow, iOS app development UP, Flutter developer Kanpur, React Native Kanpur, app development Uttar Pradesh";
$pageUrl      = "https://www.logixcode.com/mobile-app-development";
$serviceName  = "Mobile App Development";
$heroTag      = "iOS & Android Apps";
$heroTitle    = "Mobile <em>App Development</em> in Kanpur";
$heroSubtitle = "From idea to App Store and Google Play in 30–60 days. We build stunning, high-performance Android and iOS apps that users love and businesses rely on.";
$serviceImage = "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80";

$serviceIntro = [
  'heading' => 'Apps That Work as Hard as <em>You Do</em>',
  'paras'   => [
    "Mobile apps are no longer optional — they're essential. LogixCode's mobile app development team in Kanpur builds cross-platform and native apps for Android and iOS that deliver fast, intuitive experiences your customers will love.",
    "Using Flutter and React Native, we build once and deploy everywhere — cutting your time and cost in half while maintaining near-native performance. From delivery apps and booking platforms to enterprise tools and health trackers, we build it all.",
  ],
];

$features = [
  ['icon'=>'<path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>', 'title'=>'Cross-Platform Apps', 'desc'=>'One codebase for both Android and iOS using Flutter — same quality, half the development time and cost.'],
  ['icon'=>'<path d="M13 10V3L4 14h7v7l9-11h-7z"/>', 'title'=>'High Performance', 'desc'=>'Smooth 60fps animations, fast load times and offline support — built with performance as a first priority.'],
  ['icon'=>'<path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>', 'title'=>'Payment Integration', 'desc'=>'Razorpay, PayU, Stripe and UPI integration for in-app purchases, subscriptions and e-commerce transactions.'],
  ['icon'=>'<path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>', 'title'=>'Push Notifications', 'desc'=>'Firebase-powered push notifications to keep users engaged with personalised alerts, offers and updates.'],
  ['icon'=>'<path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>', 'title'=>'App Store Publishing', 'desc'=>'We handle Play Store and App Store submission, screenshots, descriptions, and compliance review end to end.'],
  ['icon'=>'<path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>', 'title'=>'Secure & Scalable', 'desc'=>'JWT auth, data encryption, API security and cloud infrastructure that scales with your growing user base.'],
];

$processSteps = [
  ['title'=>'Concept & Strategy', 'desc'=>'We define your app\'s core features, user flows and monetisation strategy in a free discovery session.'],
  ['title'=>'UI/UX Design',       'desc'=>'Beautiful Figma prototypes with full user journeys — tested and approved before development begins.'],
  ['title'=>'Development',        'desc'=>'Flutter/React Native development with clean code, tested APIs and real device testing throughout.'],
  ['title'=>'QA & Testing',       'desc'=>'Manual and automated testing on 15+ devices, screen sizes and OS versions to ensure a flawless launch.'],
  ['title'=>'Store Submission',   'desc'=>'We submit to Google Play and App Store, handle rejection responses and ensure successful approval.'],
  ['title'=>'Launch & Support',   'desc'=>'Post-launch monitoring, crash analytics via Firebase and 30-day free support with bug fixes.'],
];

$technologies = ['Flutter','React Native','Dart','JavaScript','Firebase','Node.js','REST API','Razorpay','Google Maps API','Push Notifications','SQLite','AWS'];

$faq = [
  ['q'=>'How much does mobile app development cost in Kanpur?', 'a'=>'A simple app with 5–8 screens starts from ₹40,000–₹80,000. A medium-complexity app with payments and backend costs ₹1,00,000–₹3,00,000. Enterprise apps with AI features can go higher. We give a transparent quote after a free call.'],
  ['q'=>'How long does it take to build a mobile app?', 'a'=>'A basic app takes 4–6 weeks. A medium-complexity app takes 8–12 weeks. An enterprise or marketplace app takes 3–6 months. We use agile sprints so you see progress every 2 weeks.'],
  ['q'=>'Do you build for both Android and iOS?', 'a'=>'Yes. Using Flutter, we build a single codebase that runs natively on both Android and iOS — cutting development time and cost by ~40% compared to building two separate apps.'],
  ['q'=>'Will I own the app after it\'s built?', 'a'=>'Yes. You own 100% of the source code, Play Store/App Store accounts and all assets. We never hold your app hostage.'],
  ['q'=>'Can you add an admin panel for my app?', 'a'=>'Absolutely. We build a web-based admin dashboard for every app so you can manage users, content, orders and analytics without any coding knowledge.'],
];

$breadcrumbs = [['name'=>'Services','url'=>'https://www.logixcode.com/services'],['name'=>'Mobile App Development','url'=>$pageUrl]];
$serviceSchema = ['name'=>'Mobile App Development', 'desc'=>$pageDesc];

include __DIR__ . '/../includes/service-page.php';
