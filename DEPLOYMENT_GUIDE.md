# 🚀 Guide de Déploiement - Get Ready With Me

## 📋 Prérequis

1. **Compte GitHub** avec un repository public
2. **Domaine** `getreadywithme.site` configuré
3. **Accès en ligne de commande** (Terminal/Command Prompt)

## 🔧 Configuration du Repository GitHub

### 1. Créer le Repository
```bash
# Créer un nouveau repository sur GitHub
# Nom: getreadywithme (ou votre choix)
# Visibilité: Public
# Ne pas initialiser avec README
```

### 2. Cloner le Repository
```bash
git clone https://github.com/VOTRE_USERNAME/getreadywithme.git
cd getreadywithme
```

### 3. Copier les Fichiers
```bash
# Copier tous les fichiers du dossier website/ vers le repository
cp -r /chemin/vers/website/* .
```

## 🌐 Configuration du Domaine

### 1. DNS Configuration
Configurez ces enregistrements DNS chez votre fournisseur de domaine :

```
Type: A
Nom: @
Valeur: 185.199.108.153

Type: A  
Nom: @
Valeur: 185.199.109.153

Type: A
Nom: @
Valeur: 185.199.110.153

Type: A
Nom: @
Valeur: 185.199.111.153

Type: CNAME
Nom: www
Valeur: VOTRE_USERNAME.github.io
```

### 2. Configuration GitHub Pages
1. Allez dans **Settings** > **Pages**
2. **Source**: Deploy from a branch
3. **Branch**: main
4. **Custom domain**: `getreadywithme.site`
5. ✅ **Enforce HTTPS**

## 📄 Conversion PHP vers HTML

### Option 1: Script Automatique
```bash
cd website
php convert_to_static.php
```

### Option 2: Conversion Manuelle
1. Ouvrez chaque fichier PHP dans un navigateur
2. Sauvegardez la page en tant que HTML
3. Renommez selon le mapping :
   - `index.php` → `index.html`
   - `about.php` → `about.html`
   - `features.php` → `features.html`
   - `user-roles.php` → `user-roles.html`
   - `kyc.php` → `kyc.html`
   - `testimonials.php` → `testimonials.html`
   - `contact.php` → `contact.html`

## 🚀 Déploiement

### Option 1: Script Automatique
```bash
cd website
./deploy.sh
```

### Option 2: Commandes Manuelles
```bash
# Initialiser Git
git init

# Ajouter le remote
git remote add origin https://github.com/VOTRE_USERNAME/getreadywithme.git

# Ajouter tous les fichiers
git add .

# Commit
git commit -m "Deploy Get Ready With Me website"

# Push
git push -u origin main
```

## ✅ Vérification

1. **Attendez 5-10 minutes** pour la propagation
2. **Vérifiez l'URL**: https://getreadywithme.site
3. **Testez les pages**:
   - https://getreadywithme.site/about.html
   - https://getreadywithme.site/features.html
   - https://getreadywithme.site/contact.html

## 🔍 SEO et Moteurs de Recherche

### 1. Soumission aux Moteurs de Recherche

#### Google Search Console
1. Allez sur [Google Search Console](https://search.google.com/search-console)
2. Ajoutez votre propriété: `getreadywithme.site`
3. Vérifiez la propriété via fichier HTML
4. Soumettez votre sitemap: `https://getreadywithme.site/sitemap.xml`

#### Bing Webmaster Tools
1. Allez sur [Bing Webmaster Tools](https://www.bing.com/webmasters)
2. Ajoutez votre site
3. Vérifiez la propriété
4. Soumettez le sitemap

### 2. Optimisations SEO Incluses

✅ **Meta Tags** optimisés pour chaque page  
✅ **Open Graph** pour les réseaux sociaux  
✅ **Twitter Cards** pour Twitter  
✅ **JSON-LD** structured data  
✅ **Sitemap XML** automatique  
✅ **Robots.txt** configuré  
✅ **Favicon** multi-formats  
✅ **PWA Manifest** pour mobile  

### 3. Mots-Clés Ciblés

- `marketplace Burkina Faso`
- `application mobile e-commerce`
- `Get Ready With Me`
- `LASERT SARL`
- `Gueswende Kafando`
- `Orange Money Moov Money`
- `livraison Ouagadougou`
- `vendeur acheteur livreur`

## 🔧 Maintenance

### Mises à Jour
```bash
# Après modifications
git add .
git commit -m "Update: description des modifications"
git push origin main
```

### Monitoring
- **Uptime**: Surveillez la disponibilité
- **Performance**: Testez la vitesse de chargement
- **SEO**: Vérifiez les positions dans Google

## 📞 Support

En cas de problème :
1. Vérifiez les logs GitHub Pages
2. Testez la configuration DNS
3. Vérifiez le certificat SSL
4. Contactez le support GitHub si nécessaire

---

**🎉 Félicitations !** Votre site Get Ready With Me est maintenant en ligne et optimisé pour les moteurs de recherche !
