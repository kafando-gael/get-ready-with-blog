<?php
$page_title = "Fonctionnalités";
$page_description = "Découvrez toutes les fonctionnalités de Get Ready With Me : authentification sécurisée, marketplace intégré, système de livraison, paiements multiples et dashboard admin.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Fonctionnalités Complètes</h1>
        <p>Découvrez toutes les capacités exceptionnelles de Get Ready With Me, l'application marketplace la plus avancée du Burkina Faso</p>
    </div>
</section>

<!-- Authentication Features -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Authentification & Sécurité</h2>
        <p class="section-subtitle">Système de sécurité de niveau bancaire pour protéger vos données et transactions</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">🔐</div>
                <h3>Authentification JWT</h3>
                <p>Système d'authentification moderne avec tokens JWT et refresh tokens pour une sécurité maximale. Sessions sécurisées et gestion automatique des tokens expirés.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🆔</div>
                <h3>Vérification KYC</h3>
                <p>Processus de vérification d'identité complet avec upload de pièce d'identité et selfie. Validation automatique et manuelle pour garantir l'authenticité des utilisateurs.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🛡️</div>
                <h3>Protection Avancée</h3>
                <p>Protection contre les injections SQL, attaques XSS, et autres vulnérabilités courantes. Validation stricte des entrées utilisateur et chiffrement des données sensibles.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">👥</div>
                <h3>Gestion Multi-Rôles</h3>
                <p>Système de rôles flexible permettant aux utilisateurs de basculer entre acheteur, vendeur, et livreur selon leurs besoins du moment.</p>
            </div>
        </div>
    </div>
</section>

<!-- Marketplace Features -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">Marketplace Intégré</h2>
        <p class="section-subtitle">Plateforme de commerce électronique complète avec toutes les fonctionnalités nécessaires</p>
        
        <div class="two-column">
            <div>
                <h3>Pour les Vendeurs</h3>
                <div class="grid" style="grid-template-columns: 1fr;">
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>🏪 Création de Boutique Automatique</h4>
                        <p>Chaque vendeur obtient automatiquement sa propre boutique personnalisée dès l'inscription.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📦 Gestion de Produits</h4>
                        <p>Ajout, modification et suppression de produits avec images multiples, descriptions détaillées et gestion du stock.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>💰 Gestion des Offres</h4>
                        <p>Reception et gestion des offres d'achat avec acceptation ou refus, et négociation des prix.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📊 Tableau de Bord Vendeur</h4>
                        <p>Suivi des ventes, statistiques de performance, gestion des commandes et historique des transactions.</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Pour les Acheteurs</h3>
                <div class="grid" style="grid-template-columns: 1fr;">
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>🔍 Recherche & Filtres</h4>
                        <p>Recherche intelligente avec filtres par catégorie, prix, localisation et autres critères pertinents.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>🛒 Panier & Commandes</h4>
                        <p>Ajout au panier, modification des quantités, et processus de commande simplifié avec suivi en temps réel.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>💬 Système d'Offres</h4>
                        <p>Envoi d'offres personnalisées aux vendeurs pour négocier les prix et conditions d'achat.</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📱 Suivi des Commandes</h4>
                        <p>Suivi en temps réel du statut des commandes : en préparation, en cours de livraison, livrée.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Payment Features -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Paiements Multiples</h2>
        <p class="section-subtitle">Support complet des moyens de paiement populaires au Burkina Faso</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">💳</div>
                <h3>Cartes Bancaires</h3>
                <p>Intégration Stripe pour les paiements par carte bancaire internationale et locale avec sécurité PCI DSS.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🟠</div>
                <h3>Orange Money</h3>
                <p>Paiement mobile via Orange Money, le moyen de paiement le plus populaire au Burkina Faso.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔵</div>
                <h3>Moov Money</h3>
                <p>Intégration complète avec Moov Money pour les paiements mobiles sécurisés et instantanés.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🌊</div>
                <h3>Wave</h3>
                <p>Support de Wave, la solution de paiement mobile en pleine expansion en Afrique de l'Ouest.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">💵</div>
                <h3>Paiement Cash</h3>
                <p>Option de paiement cash à la livraison pour les utilisateurs préférant les transactions en espèces.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🏦</div>
                <h3>Portefeuille Virtuel</h3>
                <p>Création automatique d'un portefeuille virtuel pour chaque utilisateur avec gestion des soldes et retraits.</p>
            </div>
        </div>
    </div>
</section>

<!-- Delivery Features -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">Système de Livraison Intelligent</h2>
        <p class="section-subtitle">Gestion optimisée des livraisons avec suivi en temps réel</p>
        
        <div class="two-column">
            <div>
                <h3>Pour les Livreurs</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Inscription avec KYC</strong> - Vérification d'identité et validation du véhicule
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Attribution Automatique</strong> - Réception automatique des commandes selon la zone
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Suivi GPS</strong> - Géolocalisation en temps réel pour optimiser les trajets
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Mise à Jour de Statut</strong> - Changement de statut simple : collecté, en route, livré
                    </li>
                </ul>
            </div>
            <div>
                <h3>Pour les Clients</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Géolocalisation Précise</strong> - Indication d'adresse via carte interactive
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Suivi en Temps Réel</strong> - Notifications push pour chaque étape
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Contact Direct</strong> - Communication avec le livreur via l'application
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Historique Complet</strong> - Consultation de toutes les livraisons passées
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Experience & Rating Features -->
<section class="section">
    <div class="container">
        <h2 class="section-title">🌟 Système d'Expérience & de Notation</h2>
        <p class="section-subtitle">Gamification et confiance pour une expérience utilisateur exceptionnelle</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">⭐</div>
                <h3>Notation Mutuelle</h3>
                <p>Système de notation 1 à 5 étoiles entre tous les utilisateurs. Les acheteurs notent vendeurs et livreurs, et vice versa pour créer un écosystème de confiance.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">📈</div>
                <h3>Progression d'Expérience</h3>
                <p>Points d'expérience gagnés pour chaque action positive : achats, ventes, livraisons, évaluations. Progression automatique avec niveaux et badges.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🏆</div>
                <h3>Programme de Fidélité</h3>
                <p>Points de fidélité accumulés sur chaque transaction. Récompenses progressives : réductions, accès VIP, support prioritaire et fonctionnalités exclusives.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">👑</div>
                <h3>Badges & Reconnaissance</h3>
                <p>Badges spécialisés pour récompenser les utilisateurs exemplaires : "Vendeur de Confiance", "Livreur Rapide", "Client Fidèle", "Ambassadeur".</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">📊</div>
                <h3>Statistiques Personnelles</h3>
                <p>Tableaux de bord personnalisés avec métriques détaillées : ventes, achats, livraisons, évaluations moyennes et classement dans la communauté.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🎯</div>
                <h3>Avantages Exclusifs</h3>
                <p>Utilisateurs expérimentés bénéficient d'avantages : priorité dans les recherches, réductions spéciales, support VIP et accès anticipé aux nouvelles fonctionnalités.</p>
            </div>
        </div>
    </div>
</section>

<!-- Technical Features -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">Fonctionnalités Techniques</h2>
        <p class="section-subtitle">Technologies de pointe pour une expérience utilisateur exceptionnelle</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon">⚡</div>
                <h3>Performance Optimisée</h3>
                <p>Chargement rapide avec lazy loading, mise en cache intelligente, et optimisation des images pour une expérience fluide.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">📱</div>
                <h3>Interface Responsive</h3>
                <p>Design adaptatif pour tous les écrans, navigation intuitive et accessibilité optimisée pour tous les utilisateurs.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔔</div>
                <h3>Notifications Push</h3>
                <p>Système de notifications en temps réel pour les nouvelles offres, mises à jour de commandes et messages importants.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🌐</div>
                <h3>Mode Hors Ligne</h3>
                <p>Fonctionnalités de base disponibles hors ligne avec synchronisation automatique lors du retour de la connexion.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔍</div>
                <h3>Recherche Intelligente</h3>
                <p>Algorithme de recherche avancé avec suggestions automatiques, correction d'erreurs et filtres dynamiques.</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon">🔄</div>
                <h3>Synchronisation Temps Réel</h3>
                <p>Mise à jour instantanée des données entre tous les appareils connectés pour une expérience cohérente.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: #000; color: #fff;">
    <div class="container text-center">
        <h2 style="color: #fff; margin-bottom: 2rem;">Prêt à Découvrir Toutes Ces Fonctionnalités ?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #ccc;">Téléchargez Get Ready With Me et explorez notre marketplace complet dès aujourd'hui.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="user-roles.php" class="btn btn-secondary">Découvrir les Rôles</a>
            <a href="contact.php" class="btn btn-secondary">Nous Contacter</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
