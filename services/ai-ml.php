<?php
$pageTitle    = "AI & Machine Learning Development Company Kanpur – LogixCode";
$pageDesc     = "Custom AI & machine learning solutions in Kanpur by LogixCode. Chatbots, NLP, recommendation engines, predictive analytics & intelligent automation. Get free quote!";
$pageKeywords = "AI development company Kanpur, machine learning Lucknow, chatbot development UP, NLP solutions India, artificial intelligence Kanpur, AI automation Uttar Pradesh";
$pageUrl      = "https://www.logixcode.com/ai-ml";
$serviceName  = "AI & Machine Learning";
$heroTag      = "Artificial Intelligence Solutions";
$heroTitle    = "AI &amp; <em>Machine Learning</em> Development";
$heroSubtitle = "Intelligent automation, predictive analytics and smart chatbots that help your business work faster, smarter and more profitably — powered by cutting-edge AI.";
$serviceImage = "https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=80";

$serviceIntro = [
  'heading' => 'Bring the Power of AI to <em>Your Business</em>',
  'paras'   => [
    "Artificial intelligence is no longer a luxury reserved for tech giants. LogixCode makes AI accessible and practical for businesses of every size in Kanpur and across Uttar Pradesh — from smart chatbots that handle customer queries to predictive models that forecast your sales.",
    "Our AI and ML team designs, trains and deploys intelligent systems that integrate seamlessly into your existing workflows — automating repetitive tasks, uncovering insights hidden in your data and delivering personalised experiences to your customers.",
  ],
];

$features = [
  ['icon'=>'<path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>', 'title'=>'AI Chatbots', 'desc'=>'Intelligent chatbots for websites and WhatsApp that handle FAQs, lead qualification, booking and support 24/7 — without human intervention.'],
  ['icon'=>'<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>', 'title'=>'Predictive Analytics', 'desc'=>'Sales forecasting, demand prediction, churn analysis and risk assessment models trained on your historical data.'],
  ['icon'=>'<path d="M4 6h16M4 10h16M4 14h16M4 18h7"/>', 'title'=>'NLP & Text Analysis', 'desc'=>'Sentiment analysis, document classification, auto-summarisation and multilingual processing for customer reviews, emails and support tickets.'],
  ['icon'=>'<path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>', 'title'=>'Recommendation Engines', 'desc'=>'Personalised product, content or service recommendations that increase average order value and user engagement on your platform.'],
  ['icon'=>'<path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>', 'title'=>'Computer Vision', 'desc'=>'Face recognition, object detection, barcode scanning and document extraction using state-of-the-art computer vision models.'],
  ['icon'=>'<path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>', 'title'=>'Process Automation (RPA)', 'desc'=>'Robotic process automation to eliminate manual data entry, report generation and repetitive digital tasks across your business.'],
];

$processSteps = [
  ['title'=>'Data Assessment',   'desc'=>'We assess your existing data, identify AI opportunities and prioritise solutions by business impact and feasibility.'],
  ['title'=>'Model Design',      'desc'=>'Select the right ML algorithm, design the training pipeline and prepare clean, labelled training datasets.'],
  ['title'=>'Training & Testing','desc'=>'Train, validate and fine-tune the model with real data — iterating until accuracy meets business requirements.'],
  ['title'=>'Integration',       'desc'=>'Deploy the AI model into your website, app or backend via a clean REST API — invisible to users but powerfully present.'],
  ['title'=>'Monitoring',        'desc'=>'Continuous model performance monitoring with drift detection and retraining as new data arrives.'],
];

$technologies = ['Python','TensorFlow','PyTorch','Scikit-learn','OpenAI API','LangChain','Hugging Face','FastAPI','Docker','AWS SageMaker','Google Vertex AI','PostgreSQL / Vector DB'];

$faq = [
  ['q'=>'Do I need a lot of data to use AI?', 'a'=>'Not always. For off-the-shelf solutions like chatbots using OpenAI GPT, you need very little data — we can fine-tune it with your FAQs and documents. For custom ML models like sales forecasting, we recommend at least 6–12 months of historical data.'],
  ['q'=>'How much does AI development cost?', 'a'=>'A simple FAQ chatbot starts from ₹15,000–₹40,000. A custom NLP or prediction model starts from ₹80,000–₹3,00,000 depending on complexity. We provide a detailed quote after understanding your use case.'],
  ['q'=>'Will AI replace my employees?', 'a'=>'AI is designed to augment your team, not replace them. It handles repetitive, time-consuming tasks so your people can focus on higher-value creative and strategic work.'],
  ['q'=>'Can you build a WhatsApp chatbot for my business?', 'a'=>'Yes. We build WhatsApp Business API chatbots that handle customer enquiries, send order updates, collect leads and even process bookings — 24/7, automatically.'],
  ['q'=>'Is my data safe when using AI?', 'a'=>'Absolutely. All AI models we build are hosted on secure cloud infrastructure (AWS/GCP) with data encryption, access controls and GDPR-compliant data handling.'],
];

$breadcrumbs = [['name'=>'Services','url'=>'https://www.logixcode.com/services'],['name'=>'AI & Machine Learning','url'=>$pageUrl]];
$serviceSchema = ['name'=>'AI & Machine Learning Development', 'desc'=>$pageDesc];

include __DIR__ . '/../includes/service-page.php';
