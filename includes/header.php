<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Get Ready With Me</title>
    
    <!-- SEO Meta Tags -->
    <?php include 'includes/seo.php'; ?>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <a href="index.html" class="logo-link">
                <img src="images/logo.svg" alt="Get Ready With Me Logo" class="logo">
                <span class="logo-text">Get Ready With Me</span>
            </a>
            
            <!-- Mobile menu toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <!-- Navigation menu -->
            <ul class="nav-menu">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="about.html">À Propos</a></li>
                <li><a href="features.html">Fonctionnalités</a></li>
                <li><a href="user-roles.html">Rôles</a></li>
                <li><a href="testimonials.html">Témoignages</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="main-content">
