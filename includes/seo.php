<?php
// SEO Meta Tags - Included separately to keep header clean
if (!isset($page_title)) $page_title = '';
if (!isset($page_description)) $page_description = 'LesBoutik.com - Plateforme marketplace moderne développée par LASERT SARL au Burkina Faso.';

// Basic SEO
echo '<meta name="description" content="' . htmlspecialchars($page_description) . '">' . "\n";
echo '<meta name="keywords" content="marketplace, mobile app, e-commerce, Burkina Faso, LASERT SARL, LesBoutik.com, Gueswende Kafando, React Native, Node.js, microservices, Orange Money, Moov Money, Wave, livraison, vendeur, acheteur, livreur">' . "\n";
echo '<meta name="author" content="Gueswende Kafando - LASERT SARL">' . "\n";
echo '<meta name="robots" content="index, follow">' . "\n";

// Open Graph / Facebook
echo '<meta property="og:type" content="website">' . "\n";
echo '<meta property="og:url" content="https://getreadywithme.site' . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '') . '">' . "\n";
echo '<meta property="og:title" content="' . ($page_title ? $page_title . ' - ' : '') . 'LesBoutik.com - Marketplace Mobile App">' . "\n";
echo '<meta property="og:description" content="' . htmlspecialchars($page_description) . '">' . "\n";
echo '<meta property="og:image" content="https://getreadywithme.site/images/logo.svg">' . "\n";
echo '<meta property="og:site_name" content="LesBoutik.com">' . "\n";
echo '<meta property="og:locale" content="fr_FR">' . "\n";

// Twitter
echo '<meta property="twitter:card" content="summary_large_image">' . "\n";
echo '<meta property="twitter:url" content="https://getreadywithme.site' . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '') . '">' . "\n";
echo '<meta property="twitter:title" content="' . ($page_title ? $page_title . ' - ' : '') . 'LesBoutik.com - Marketplace Mobile App">' . "\n";
echo '<meta property="twitter:description" content="' . htmlspecialchars($page_description) . '">' . "\n";
echo '<meta property="twitter:image" content="https://getreadywithme.site/images/logo.svg">' . "\n";

// Canonical URL
echo '<link rel="canonical" href="https://getreadywithme.site' . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '') . '">' . "\n";

// Favicons - Multiple formats for better compatibility
echo '<link rel="icon" type="image/svg+xml" href="/favicon.svg">' . "\n";
echo '<link rel="icon" type="image/svg+xml" href="/images/favicon.svg">' . "\n";
echo '<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon.svg">' . "\n";
echo '<link rel="shortcut icon" href="/favicon.svg">' . "\n";
echo '<link rel="manifest" href="/site.webmanifest">' . "\n";

// JSON-LD Structured Data
echo '<script type="application/ld+json">' . "\n";
echo '{' . "\n";
echo '  "@context": "https://schema.org",' . "\n";
echo '  "@type": "SoftwareApplication",' . "\n";
echo '  "name": "LesBoutik.com",' . "\n";
echo '  "description": "Application mobile de marketplace moderne développée par LASERT SARL",' . "\n";
echo '  "url": "https://getreadywithme.site",' . "\n";
echo '  "applicationCategory": "BusinessApplication",' . "\n";
echo '  "operatingSystem": "iOS, Android",' . "\n";
echo '  "offers": {' . "\n";
echo '    "@type": "Offer",' . "\n";
echo '    "price": "0",' . "\n";
echo '    "priceCurrency": "XOF"' . "\n";
echo '  },' . "\n";
echo '  "author": {' . "\n";
echo '    "@type": "Organization",' . "\n";
echo '    "name": "LASERT SARL",' . "\n";
echo '    "url": "https://lasertweb.com",' . "\n";
echo '    "founder": {' . "\n";
echo '      "@type": "Person",' . "\n";
echo '      "name": "Gueswende Kafando"' . "\n";
echo '    }' . "\n";
echo '  },' . "\n";
echo '  "publisher": {' . "\n";
echo '    "@type": "Organization",' . "\n";
echo '    "name": "LASERT SARL",' . "\n";
echo '    "address": {' . "\n";
echo '      "@type": "PostalAddress",' . "\n";
echo '      "addressLocality": "Ouagadougou",' . "\n";
echo '      "addressCountry": "Burkina Faso"' . "\n";
echo '    }' . "\n";
echo '  }' . "\n";
echo '}' . "\n";
echo '</script>' . "\n";
?>
