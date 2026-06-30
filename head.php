<?php
// --- Site-wide SEO config ---
$siteName = 'Bluesky Advisors';
$baseUrl  = 'https://bluesky-advisors.com';
$ogImage  = $baseUrl . '/assets/img/banner/page-banner.jpg';

// Per-page values: set $pageTitle / $pageDescription (and $noindex for
// non-indexable pages) in each page BEFORE `include 'head.php'`. Defaults
// below cover anything that doesn't.
$pageTitle       = $pageTitle       ?? 'Bluesky Advisors — Corporate & Financial Advisory in Dubai';
$pageDescription = $pageDescription ?? 'Bluesky Advisors DMCC is a Dubai-based corporate and financial advisory firm offering corporate, transaction, real estate, growth, IT and HR advisory services.';
$noindex         = $noindex         ?? false;

// Canonical URL derived from the requested page (index → site root).
$script    = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$htmlName  = preg_replace('/\.php$/', '.html', $script);
$canonical = $baseUrl . '/' . ($htmlName === 'index.html' ? '' : $htmlName);

$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <title><?= $e($pageTitle) ?></title>
    <meta name="description" content="<?= $e($pageDescription) ?>">
    <link rel="canonical" href="<?= $e($canonical) ?>">
    <meta name="robots" content="<?= $noindex ? 'noindex, follow' : 'index, follow' ?>">

    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="manifest" href="site.webmanifest">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="view-transition" content="same-origin">
    <meta name="theme-color" content="#1c2539">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= $e($siteName) ?>">
    <meta property="og:title" content="<?= $e($pageTitle) ?>">
    <meta property="og:description" content="<?= $e($pageDescription) ?>">
    <meta property="og:url" content="<?= $e($canonical) ?>">
    <meta property="og:image" content="<?= $e($ogImage) ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= $e($pageDescription) ?>">
    <meta name="twitter:image" content="<?= $e($ogImage) ?>">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    >
    <!-- all css -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Organization structured data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Bluesky Advisors DMCC",
      "url": "<?= $baseUrl ?>",
      "logo": "<?= $baseUrl ?>/assets/img/logo-white.png",
      "image": "<?= $ogImage ?>",
      "email": "contact@bluesky-advisors.com",
      "description": "Dubai-based corporate and financial advisory firm offering corporate, transaction, real estate, growth, IT and HR advisory services.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Unit No: BA1078, DMCC Business Center, Jumeirah Lakes Towers",
        "addressLocality": "Dubai",
        "addressCountry": "AE"
      },
      "areaServed": "AE"
    }
    </script>
  </head>
<body>
