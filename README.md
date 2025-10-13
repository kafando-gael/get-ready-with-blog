# Get Ready With Me - Website Informational

Site web informatif pour l'application mobile marketplace "Get Ready With Me" développée par LASERT SARL.

## 🚀 Démarrage Rapide

### Prérequis
- PHP 8.0 ou supérieur installé
- Navigateur web moderne

### Installation et Lancement

1. **Naviguez vers le dossier website :**
   ```bash
   cd website
   ```

2. **Lancez le serveur PHP :**
   ```bash
   php -S localhost:8000
   ```
   
   Ou utilisez le script fourni :
   ```bash
   php server.php
   ```

3. **Ouvrez votre navigateur :**
   ```
   http://localhost:8000
   ```

## 📁 Structure du Site

```
website/
├── index.php              # Page d'accueil
├── about.php              # À propos de l'entreprise
├── features.php           # Fonctionnalités de l'app
├── user-roles.php         # Rôles utilisateurs
├── kyc.php                # Vérification KYC
├── contact.php            # Contact et formulaire
├── css/
│   └── style.css          # Styles CSS (noir et blanc)
├── images/
│   └── logo.svg           # Logo Get Ready With Me
├── includes/
│   ├── header.php         # En-tête commun
│   └── footer.php         # Pied de page commun
├── server.php             # Script de serveur
└── README.md              # Ce fichier
```

## 🎨 Design

- **Couleurs :** Noir et blanc exclusivement
- **Style :** Moderne et minimaliste
- **Responsive :** Adaptatif mobile et desktop
- **Typographie :** Arial, claire et lisible

## 📄 Pages Disponibles

1. **Accueil** (`index.php`) - Présentation générale de l'app avec témoignages
2. **À Propos** (`about.php`) - Informations sur LASERT SARL
3. **Fonctionnalités** (`features.php`) - Détails techniques et fonctionnalités
4. **Rôles Utilisateurs** (`user-roles.php`) - Acheteur, Vendeur, Livreur avec systèmes d'expérience
5. **Vérification KYC** (`kyc.php`) - Processus de vérification d'identité
6. **Témoignages** (`testimonials.php`) - Mot du propriétaire et avis d'utilisateurs
7. **Contact** (`contact.php`) - Formulaire de contact et informations

## 🔧 Personnalisation

### Modifier le Contenu
- Éditez directement les fichiers PHP
- Le contenu est en français
- Toutes les pages utilisent les includes header/footer

### Modifier le Style
- Éditez `css/style.css`
- Couleurs principales : `#000` (noir) et `#fff` (blanc)
- Design responsive avec CSS Grid et Flexbox

### Ajouter des Pages
1. Créez un nouveau fichier PHP
2. Incluez header et footer
3. Ajoutez le lien dans la navigation

## 📱 Application Mobile

Ce site présente l'application mobile "Get Ready With Me" qui inclut :

- **Architecture :** Microservices avec React Native (frontend) et Node.js (backend)
- **Base de données :** PostgreSQL via Supabase
- **Authentification :** JWT avec refresh tokens
- **Sécurité :** Vérification KYC complète
- **Paiements :** Stripe + mobile money (Orange Money, Moov Money, Wave)
- **Rôles :** Acheteur, Vendeur, Livreur (système multi-rôles flexible)
- **Gamification :** Système d'expérience, notation mutuelle, badges et programme de fidélité
- **Témoignages :** Mot du propriétaire Gueswende Kafando (Architecte Logiciel) et avis d'utilisateurs
- **Architecture :** Conçue et développée par Gueswende Kafando, expert en React Native et Node.js

## 🏢 À Propos de LASERT SARL

- **Entreprise :** LASERT SARL
- **Site web :** https://lasertweb.com
- **Directeur :** Gueswende Kafando (Directeur Général, Développeur Senior & Architecte Logiciel)
- **Équipe :** 8 professionnels expérimentés
- **Localisation :** Ouagadougou, Burkina Faso
- **Services :** Centre d'appel, équipements IT, développement, intermédiation

## 📞 Support

Pour toute question ou assistance :
- Utilisez le formulaire de contact sur le site
- Visitez https://lasertweb.com
- Contactez LASERT SARL directement

## 🚀 Déploiement

Pour déployer en production :
1. Configurez un serveur web (Apache/Nginx)
2. Installez PHP et les extensions nécessaires
3. Uploadez tous les fichiers
4. Configurez les permissions appropriées
5. Testez toutes les fonctionnalités

---

**Développé avec ❤️ par LASERT SARL pour Get Ready With Me**
