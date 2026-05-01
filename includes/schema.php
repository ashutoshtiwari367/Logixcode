<?php
/**
 * LogixCode – Schema.org Structured Data
 * Include near </body>. Set $breadcrumbs = [['name'=>'','url'=>'']] for breadcrumbs.
 * Set $serviceSchema = ['name'=>'','desc'=>''] for Service pages.
 */
$_crumbs = $breadcrumbs ?? [];
$_svc    = $serviceSchema ?? null;
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.logixcode.com/#organization",
      "name": "LogixCode",
      "url": "https://www.logixcode.com",
      "logo": {"@type":"ImageObject","url":"https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp"},
      "foundingDate": "2025",
      "description": "Top IT development company in Kanpur offering software, web & mobile app development, digital marketing and AI solutions.",
      "telephone": "+91-84678-98854",
      "email": "info@logixcode.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2/1 Koyla Nagar, Swarn Jayanti Vihar",
        "addressLocality": "Kanpur",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "208013",
        "addressCountry": "IN"
      },
      "geo": {"@type":"GeoCoordinates","latitude":"26.4499","longitude":"80.3319"},
      "areaServed": ["Kanpur","Lucknow","Unnao","Jhansi","Uttar Pradesh","India"],
      "sameAs": [
        "https://www.instagram.com/logix.code/",
        "https://www.facebook.com/people/logixcode/61579420961455/",
        "https://www.linkedin.com/company/logixcodekanpur"
      ],
      "priceRange": "₹₹"
    },
    {
      "@type": "LocalBusiness",
      "@id": "https://www.logixcode.com/#localbusiness",
      "name": "LogixCode",
      "image": "https://res.cloudinary.com/de7mh41io/image/upload/v1749888137/logixcode-logo.webp",
      "telephone": "+91-84678-98854",
      "email": "info@logixcode.com",
      "url": "https://www.logixcode.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2/1 Koyla Nagar, Swarn Jayanti Vihar",
        "addressLocality": "Kanpur",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "208013",
        "addressCountry": "IN"
      },
      "openingHoursSpecification": [
        {"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"opens":"09:00","closes":"19:00"}
      ],
      "foundingDate": "2025",
      "priceRange": "₹₹"
    }
    <?php if (!empty($_crumbs)): ?>
    ,{
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://www.logixcode.com/"}
        <?php $pos=2; foreach($_crumbs as $c): ?>
        ,{"@type":"ListItem","position":<?= $pos++ ?>,"name":"<?= htmlspecialchars($c['name']) ?>","item":"<?= htmlspecialchars($c['url']) ?>"}
        <?php endforeach; ?>
      ]
    }
    <?php endif; ?>
    <?php if ($_svc): ?>
    ,{
      "@type": "Service",
      "serviceType": "<?= htmlspecialchars($_svc['name']) ?>",
      "description": "<?= htmlspecialchars($_svc['desc']) ?>",
      "provider": {"@id":"https://www.logixcode.com/#organization"},
      "areaServed": "Kanpur, Uttar Pradesh, India",
      "url": "<?= htmlspecialchars($pageUrl ?? '') ?>"
    }
    <?php endif; ?>
  ]
}
</script>
