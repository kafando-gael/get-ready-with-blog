<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>LesBoutik.com</title>
    
    <!-- SEO Meta Tags -->
    <?php include 'includes/seo.php'; ?>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="about.html" class="logo-link">
                <img src="images/logo.svg" alt="LesBoutik.com Logo" class="logo">
            </a>
        </nav>
    </header>
    
    <main class="main-content">
