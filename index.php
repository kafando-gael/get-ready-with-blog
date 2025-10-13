<?php
$page_title = "Accueil";
$page_description = "Get Ready With Me - Application mobile de marketplace moderne développée par LASERT SARL. Découvrez notre plateforme sécurisée pour acheteurs, vendeurs et livreurs au Burkina Faso.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Get Ready With Me</h1>
        <p>L'application mobile de marketplace moderne qui révolutionne l'achat et la vente au Burkina Faso. Connectez-vous avec confiance grâce à notre système sécurisé et notre vérification KYC complète.</p>
        <a href="features.html" class="cta-button">Découvrir les Fonctionnalités</a>
    </div>
</section>

<!-- About Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">À Propos de Notre Application</h2>
        <p class="section-subtitle">Get Ready With Me est une plateforme marketplace complète qui permet aux utilisateurs de vendre, acheter et livrer des produits de manière sécurisée et efficace.</p>
        
        <div class="two-column">
            <div>
                <h3>Notre Vision</h3>
                <p>Nous créons un écosystème numérique robuste qui facilite les échanges commerciaux tout en garantissant la sécurité et la confiance entre tous les acteurs du marché.</p>
                <p>Notre application utilise une architecture microservices moderne avec des technologies de pointe comme React Native pour le mobile et Node.js pour le backend.</p>
                <a href="about.html" class="btn btn-primary">En Savoir Plus</a>
            </div>
            <div>
                <h3>Pourquoi Nous Choisir ?</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 1rem;">✅ Authentification JWT sécurisée</li>
                    <li style="margin-bottom: 1rem;">✅ Vérification KYC complète</li>
                    <li style="margin-bottom: 1rem;">✅ Gestion multi-rôles (Acheteur, Vendeur, Livreur, Admin)</li>
                    <li style="margin-bottom: 1rem;">✅ Paiements mobiles intégrés</li>
                    <li style="margin-bottom: 1rem;">✅ Système de livraison intelligent</li>
                    <li style="margin-bottom: 1rem;">✅ Interface utilisateur intuitive</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Key Features Section -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">Fonctionnalités Principales</h2>
        <p class="section-subtitle">Découvrez les capacités exceptionnelles de notre application marketplace</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">👤</div>
                <h3>Gestion Multi-Rôles</h3>
                <p>Quatre types d'utilisateurs : Acheteurs, Vendeurs, Livreurs et Administrateurs. Chaque rôle dispose de fonctionnalités spécifiques et d'un tableau de bord personnalisé.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔐</div>
                <h3>Sécurité Renforcée</h3>
                <p>Système d'authentification JWT avec refresh tokens, vérification KYC avec upload d'ID et selfie, et validation stricte des données utilisateur.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🏪</div>
                <h3>Marketplace Intégré</h3>
                <p>Création automatique de boutique pour les vendeurs, gestion de produits avec images, système d'offres et négociation, et suivi des commandes en temps réel.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🚚</div>
                <h3>Livraison Intelligente</h3>
                <p>Attribution automatique des commandes aux livreurs, suivi GPS, mise à jour du statut en temps réel, et système de paiement sécurisé pour les frais de livraison.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">💳</div>
                <h3>Paiements Multiples</h3>
                <p>Support pour cartes bancaires, Orange Money, Moov Money, Wave, et paiement cash. Intégration Stripe et gestion sécurisée des transactions.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">⭐</div>
                <h3>Système de Notation</h3>
                <p>Notation mutuelle entre utilisateurs, système d'expérience avec niveaux et badges, et programme de fidélité pour récompenser les utilisateurs actifs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Technologies Utilisées</h2>
        <p class="section-subtitle">Notre application est construite avec les technologies les plus modernes et fiables</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">⚛️</div>
                <h3>React Native</h3>
                <p>Framework mobile cross-platform pour iOS et Android. Interface utilisateur native et performance optimale.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🟢</div>
                <h3>Node.js</h3>
                <p>Backend robuste avec Express.js ou Nest.js. Architecture microservices pour une scalabilité maximale.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🐘</div>
                <h3>PostgreSQL</h3>
                <p>Base de données relationnelle performante hébergée sur Supabase. Gestion des données sécurisée et fiable.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔑</div>
                <h3>JWT Authentication</h3>
                <p>Système d'authentification sécurisé avec tokens JWT et refresh tokens pour une sécurité maximale.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Preview -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">💬 Ce Que Disent Nos Utilisateurs</h2>
        <p class="section-subtitle">Plus de 50,000 utilisateurs nous font confiance</p>
        
        <div class="grid">
            <div class="grid-item">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div style="width: 50px; height: 50px; background: #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; margin-right: 1rem;">🛒</div>
                    <div>
                        <h4>Amadou OUEDRAOGO</h4>
                        <p style="color: #666; font-size: 0.9rem;">Acheteur - Ouagadougou</p>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: #333; margin: 0; border-left: 3px solid #007bff; padding-left: 1rem;">
                    "Grâce à Get Ready With Me, j'ai trouvé des produits de qualité que je n'aurais jamais découverts autrement. Le système de notation me donne confiance !"
                </blockquote>
                <div style="margin-top: 1rem;">
                    <span style="color: #ffc107; font-size: 1.2rem;">⭐⭐⭐⭐⭐</span>
                </div>
            </div>
            
            <div class="grid-item">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div style="width: 50px; height: 50px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; margin-right: 1rem;">🏪</div>
                    <div>
                        <h4>Fatimata KONE</h4>
                        <p style="color: #666; font-size: 0.9rem;">Vendeuse - Bobo-Dioulasso</p>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: #333; margin: 0; border-left: 3px solid #28a745; padding-left: 1rem;">
                    "Depuis que j'utilise Get Ready With Me, mes ventes ont triplé ! La boutique virtuelle est facile à gérer et mes clients sont satisfaits."
                </blockquote>
                <div style="margin-top: 1rem;">
                    <span style="color: #ffc107; font-size: 1.2rem;">⭐⭐⭐⭐⭐</span>
                </div>
            </div>
            
            <div class="grid-item">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div style="width: 50px; height: 50px; background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; margin-right: 1rem;">🚚</div>
                    <div>
                        <h4>Boukary ZERBO</h4>
                        <p style="color: #666; font-size: 0.9rem;">Livreur - Koudougou</p>
                    </div>
                </div>
                <blockquote style="font-style: italic; color: #333; margin: 0; border-left: 3px solid #ffc107; padding-left: 1rem;">
                    "Être livreur sur Get Ready With Me a changé ma vie ! Je gagne bien ma vie et l'application me guide parfaitement pour optimiser mes trajets."
                </blockquote>
                <div style="margin-top: 1rem;">
                    <span style="color: #ffc107; font-size: 1.2rem;">⭐⭐⭐⭐⭐</span>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem;">
            <a href="testimonials.html" class="btn btn-primary">Voir Tous les Témoignages</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: #000; color: #fff;">
    <div class="container text-center">
        <h2 style="color: #fff; margin-bottom: 2rem;">Prêt à Rejoindre Notre Marketplace ?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #ccc;">Téléchargez l'application Get Ready With Me et commencez à vendre, acheter ou livrer dès aujourd'hui.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="contact.html" class="btn btn-secondary">Nous Contacter</a>
            <a href="user-roles.html" class="btn btn-secondary">Découvrir les Rôles</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
