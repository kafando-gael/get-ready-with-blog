<?php
$page_title = "Rôles Utilisateurs";
$page_description = "Découvrez les quatre rôles utilisateurs de Get Ready With Me : Acheteur, Vendeur, Livreur et Administrateur. Chaque rôle dispose de fonctionnalités spécifiques.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Rôles Utilisateurs</h1>
        <p>Quatre types d'utilisateurs, une expérience personnalisée. Découvrez comment Get Ready With Me s'adapte à vos besoins spécifiques</p>
    </div>
</section>

<!-- Role Overview -->
<section class="section">
    <div class="container">
        <h2 class="section-title">Système Multi-Rôles</h2>
        <p class="section-subtitle">Une architecture flexible permettant à chaque utilisateur de choisir son rôle selon ses besoins du moment</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon" style="background: #007bff;">🛒</div>
                <h3>Acheteur</h3>
                <p>Parcourez, recherchez et achetez des produits de qualité. Envoyez des offres, négociez les prix et suivez vos commandes en temps réel.</p>
                <a href="#acheteur" class="btn btn-primary">Découvrir</a>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon" style="background: #28a745;">🏪</div>
                <h3>Vendeur</h3>
                <p>Créez votre boutique virtuelle, gérez vos produits et recevez des paiements sécurisés. Votre boutique est créée automatiquement à l'inscription.</p>
                <a href="#vendeur" class="btn btn-primary">Découvrir</a>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon" style="background: #ffc107;">🚚</div>
                <h3>Livreur</h3>
                <p>Rejoignez notre réseau de livraison, recevez des commandes et gagnez de l'argent en livrant des colis dans votre zone géographique.</p>
                <a href="#livreur" class="btn btn-primary">Découvrir</a>
            </div>
        </div>
    </div>
</section>

<!-- Acheteur Role -->
<section id="acheteur" class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">🛒 Rôle Acheteur</h2>
        <p class="section-subtitle">Découvrez et achetez des produits de qualité avec une expérience d'achat optimisée</p>
        
        <div class="two-column">
            <div>
                <h3>Fonctionnalités Principales</h3>
                <div class="grid" style="grid-template-columns: 1fr;">
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>🔍 Recherche & Navigation</h4>
                        <p>• Parcourir tous les produits disponibles</p>
                        <p>• Recherche intelligente avec filtres avancés</p>
                        <p>• Filtrage par catégorie, prix, localisation</p>
                        <p>• Suggestions personnalisées basées sur l'historique</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>💬 Système d'Offres</h4>
                        <p>• Envoyer des offres personnalisées aux vendeurs</p>
                        <p>• Négocier les prix directement dans l'application</p>
                        <p>• Recevoir des contre-offres et accepter/refuser</p>
                        <p>• Historique complet de toutes les négociations</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>🛒 Panier & Commandes</h4>
                        <p>• Ajouter plusieurs produits au panier</p>
                        <p>• Modifier les quantités et supprimer des articles</p>
                        <p>• Processus de commande simplifié et sécurisé</p>
                        <p>• Sauvegarde automatique du panier</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Processus d'Achat</h3>
                <div style="background: #fff; padding: 2rem; border-radius: 10px; border-left: 4px solid #007bff;">
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #007bff; margin-bottom: 0.5rem;">1. Inscription Simple</h4>
                        <p>Créez votre compte en quelques minutes avec email et mot de passe sécurisé.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #007bff; margin-bottom: 0.5rem;">2. Navigation & Recherche</h4>
                        <p>Explorez les produits, utilisez les filtres et trouvez exactement ce que vous cherchez.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #007bff; margin-bottom: 0.5rem;">3. Négociation (Optionnel)</h4>
                        <p>Envoyez une offre au vendeur ou achetez directement au prix affiché.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #007bff; margin-bottom: 0.5rem;">4. Paiement Sécurisé</h4>
                        <p>Choisissez votre moyen de paiement préféré parmi les options disponibles.</p>
                    </div>
                    
                    <div>
                        <h4 style="color: #007bff; margin-bottom: 0.5rem;">5. Suivi & Livraison</h4>
                        <p>Suivez votre commande en temps réel jusqu'à la livraison.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Acheteur Experience System -->
        <div style="background: #fff; padding: 2rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid #007bff;">
            <h3 style="color: #007bff; margin-bottom: 1rem;">🌟 Système d'Expérience Acheteur</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                <div>
                    <h4>📊 Progression d'Expérience</h4>
                    <p>• +10 points par achat réussi</p>
                    <p>• +5 points par évaluation laissée</p>
                    <p>• +15 points par recommandation d'amis</p>
                    <p>• +20 points pour achats VIP</p>
                </div>
                <div>
                    <h4>⭐ Niveaux & Avantages</h4>
                    <p>• <strong>Bronze (0-100 pts):</strong> Accès de base</p>
                    <p>• <strong>Argent (100-500 pts):</strong> Support prioritaire</p>
                    <p>• <strong>Or (500-1000 pts):</strong> Réductions exclusives</p>
                    <p>• <strong>Platine (1000+ pts):</strong> Accès VIP complet</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vendeur Role -->
<section id="vendeur" class="section">
    <div class="container">
        <h2 class="section-title">🏪 Rôle Vendeur</h2>
        <p class="section-subtitle">Créez et gérez votre boutique virtuelle avec tous les outils nécessaires pour réussir</p>
        
        <div class="two-column">
            <div>
                <h3>Création Automatique de Boutique</h3>
                <p>Dès votre inscription en tant que vendeur, votre boutique virtuelle est automatiquement créée avec :</p>
                <ul style="margin-top: 1rem;">
                    <li>✅ Page de boutique personnalisée</li>
                    <li>✅ Système de gestion de produits intégré</li>
                    <li>✅ Tableau de bord vendeur complet</li>
                    <li>✅ Système de paiement automatique</li>
                    <li>✅ Outils d'analytics et de reporting</li>
                </ul>
                
                <h3>Gestion des Produits</h3>
                <div class="grid" style="grid-template-columns: 1fr;">
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📦 Ajout de Produits</h4>
                        <p>• Upload de multiples images haute qualité</p>
                        <p>• Descriptions détaillées avec formatage</p>
                        <p>• Gestion des prix et promotions</p>
                        <p>• Classification par catégories</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📊 Gestion du Stock</h4>
                        <p>• Suivi en temps réel des quantités</p>
                        <p>• Alertes de stock faible</p>
                        <p>• Historique des mouvements de stock</p>
                        <p>• Gestion des variantes de produits</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Gestion des Offres & Commandes</h3>
                <div style="background: #f8f8f8; padding: 2rem; border-radius: 10px;">
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #28a745; margin-bottom: 0.5rem;">📨 Réception d'Offres</h4>
                        <p>Recevez et gérez toutes les offres d'achat avec notifications push instantanées.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #28a745; margin-bottom: 0.5rem;">💬 Négociation</h4>
                        <p>Acceptez, refusez ou contre-proposez directement dans l'application.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #28a745; margin-bottom: 0.5rem;">📋 Gestion des Commandes</h4>
                        <p>Suivez toutes vos commandes avec mise à jour automatique du statut.</p>
                    </div>
                    
                    <div>
                        <h4 style="color: #28a745; margin-bottom: 0.5rem;">💰 Paiements</h4>
                        <p>Recevez vos paiements directement sur votre portefeuille virtuel.</p>
                    </div>
                </div>
                
                <h3>Vérification KYC Requise</h3>
                <p>Pour devenir vendeur, vous devez compléter le processus de vérification KYC :</p>
                <ul style="margin-top: 1rem;">
                    <li>📸 Photo de votre pièce d'identité</li>
                    <li>🤳 Selfie de vérification</li>
                    <li>⏱️ Validation sous 24-48h</li>
                    <li>🔒 Sécurité renforcée pour tous</li>
                </ul>
            </div>
        </div>
        
        <!-- Vendeur Experience System -->
        <div style="background: #fff; padding: 2rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid #28a745;">
            <h3 style="color: #28a745; margin-bottom: 1rem;">🌟 Système d'Expérience Vendeur</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                <div>
                    <h4>📊 Progression d'Expérience</h4>
                    <p>• +20 points par vente réussie</p>
                    <p>• +10 points par évaluation 5 étoiles</p>
                    <p>• +15 points par nouveau produit ajouté</p>
                    <p>• +25 points par client fidèle</p>
                </div>
                <div>
                    <h4>⭐ Niveaux & Avantages</h4>
                    <p>• <strong>Nouveau (0-200 pts):</strong> Boutique de base</p>
                    <p>• <strong>Confirmé (200-800 pts):</strong> Badge "Vendeur Confirmé"</p>
                    <p>• <strong>Expert (800-1500 pts):</strong> Priorité dans les recherches</p>
                    <p>• <strong>Premium (1500+ pts):</strong> Support VIP + outils avancés</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Livreur Role -->
<section id="livreur" class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">🚚 Rôle Livreur</h2>
        <p class="section-subtitle">Rejoignez notre réseau de livraison et gagnez de l'argent en livrant des colis</p>
        
        <div class="two-column">
            <div>
                <h3>Processus d'Inscription</h3>
                <div style="background: #fff; padding: 2rem; border-radius: 10px; border-left: 4px solid #ffc107;">
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #ffc107; margin-bottom: 0.5rem;">1. Inscription Livreur</h4>
                        <p>Créez votre compte livreur avec informations personnelles et véhicule.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #ffc107; margin-bottom: 0.5rem;">2. Vérification KYC</h4>
                        <p>Upload de pièce d'identité, selfie et documents du véhicule.</p>
                    </div>
                    
                    <div style="margin-bottom: 2rem;">
                        <h4 style="color: #ffc107; margin-bottom: 0.5rem;">3. Validation Admin</h4>
                        <p>Vérification manuelle par nos administrateurs (24-48h).</p>
                    </div>
                    
                    <div>
                        <h4 style="color: #ffc107; margin-bottom: 0.5rem;">4. Début des Livraisons</h4>
                        <p>Reception automatique des commandes dans votre zone.</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Fonctionnalités Livreur</h3>
                <div class="grid" style="grid-template-columns: 1fr;">
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📍 Attribution Automatique</h4>
                        <p>• Réception des commandes selon votre zone</p>
                        <p>• Notifications push pour nouvelles commandes</p>
                        <p>• Possibilité d'accepter/refuser les livraisons</p>
                        <p>• Optimisation des trajets automatique</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>📱 Gestion des Livraisons</h4>
                        <p>• Mise à jour du statut en temps réel</p>
                        <p>• Navigation GPS intégrée</p>
                        <p>• Communication avec les clients</p>
                        <p>• Photos de confirmation de livraison</p>
                    </div>
                    
                    <div class="grid-item" style="text-align: left; padding: 1rem;">
                        <h4>💰 Gestion des Gains</h4>
                        <p>• Suivi des gains en temps réel</p>
                        <p>• Historique des livraisons</p>
                        <p>• Calcul automatique des commissions</p>
                        <p>• Demande de retrait vers mobile money</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Livreur Experience System -->
        <div style="background: #fff; padding: 2rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid #ffc107;">
            <h3 style="color: #ffc107; margin-bottom: 1rem;">🌟 Système d'Expérience Livreur</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                <div>
                    <h4>📊 Progression d'Expérience</h4>
                    <p>• +15 points par livraison réussie</p>
                    <p>• +10 points par évaluation 5 étoiles</p>
                    <p>• +20 points par livraison dans les temps</p>
                    <p>• +30 points par client satisfait</p>
                </div>
                <div>
                    <h4>⭐ Niveaux & Avantages</h4>
                    <p>• <strong>Débutant (0-150 pts):</strong> Accès aux commandes de base</p>
                    <p>• <strong>Rapide (150-600 pts):</strong> Badge "Livreur Rapide"</p>
                    <p>• <strong>Professionnel (600-1200 pts):</strong> Commandes prioritaires</p>
                    <p>• <strong>Élite (1200+ pts):</strong> Tarifs premium + support VIP</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience & Rating System -->
<section class="section">
    <div class="container">
        <h2 class="section-title">🌟 Système d'Expérience & de Notation</h2>
        <p class="section-subtitle">Gagnez de l'expérience et des étoiles pour chaque interaction positive sur la plateforme</p>
        
        <div class="grid">
            <div class="grid-item">
                <div class="feature-icon" style="background: #007bff;">⭐</div>
                <h3>Notation par les Pairs</h3>
                <p>• Les acheteurs notent les vendeurs et livreurs</p>
                <p>• Les vendeurs notent les acheteurs et livreurs</p>
                <p>• Système de notation 1 à 5 étoiles</p>
                <p>• Commentaires détaillés sur chaque transaction</p>
                <p>• Impact sur la visibilité et la confiance</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon" style="background: #28a745;">📈</div>
                <h3>Niveaux d'Expérience</h3>
                <p>• Progression automatique basée sur l'activité</p>
                <p>• Badges de reconnaissance spécialisés</p>
                <p>• Avantages exclusifs pour les utilisateurs expérimentés</p>
                <p>• Statistiques personnelles détaillées</p>
                <p>• Classement dans la communauté</p>
            </div>
            
            <div class="grid-item">
                <div class="feature-icon" style="background: #ffc107;">🏆</div>
                <h3>Programme de Fidélité</h3>
                <p>• Points de fidélité pour chaque transaction</p>
                <p>• Récompenses et avantages progressifs</p>
                <p>• Réductions spéciales pour les membres VIP</p>
                <p>• Accès prioritaire aux nouvelles fonctionnalités</p>
                <p>• Support client premium</p>
            </div>
        </div>
    </div>
</section>

<!-- Role Switching -->
<section class="section" style="background: #f8f8f8;">
    <div class="container">
        <h2 class="section-title">🔄 Changement de Rôle</h2>
        <p class="section-subtitle">Flexibilité totale : changez de rôle selon vos besoins du moment</p>
        
        <div class="two-column">
            <div>
                <h3>Comment Ça Marche ?</h3>
                <p>Get Ready With Me permet à chaque utilisateur de basculer facilement entre différents rôles selon ses besoins :</p>
                
                <div style="background: #fff; padding: 2rem; border-radius: 10px; margin-top: 2rem;">
                    <div style="margin-bottom: 1.5rem;">
                        <h4 style="color: #000; margin-bottom: 0.5rem;">🎯 Scénarios Courants</h4>
                        <p>• Acheteur qui veut vendre ses propres produits</p>
                        <p>• Vendeur qui souhaite livrer pour gagner plus</p>
                        <p>• Livreur qui veut acheter des produits</p>
                        <p>• Utilisateur multi-activité</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3>Avantages du Système Multi-Rôles</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Flexibilité Maximale</strong> - Adaptez votre expérience à vos besoins
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Économie de Temps</strong> - Un seul compte pour toutes vos activités
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Sécurité Renforcée</strong> - Vérification KYC unique pour tous les rôles
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                        <span style="background: #000; color: #fff; width: 30px; height: 30px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; font-weight: bold;">✓</span>
                        <strong>Historique Unifié</strong> - Toutes vos activités dans un seul endroit
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="background: #000; color: #fff;">
    <div class="container text-center">
        <h2 style="color: #fff; margin-bottom: 2rem;">Quel Rôle Vous Correspond ?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; color: #ccc;">Rejoignez Get Ready With Me et découvrez comment notre système multi-rôles peut s'adapter à vos besoins.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="kyc.php" class="btn btn-secondary">Vérification KYC</a>
            <a href="contact.php" class="btn btn-secondary">Nous Contacter</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
