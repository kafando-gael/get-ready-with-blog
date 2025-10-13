#!/bin/bash

# Script de déploiement pour Get Ready With Me sur GitHub Pages

echo "🚀 Déploiement de Get Ready With Me sur GitHub Pages..."

# Vérifier que nous sommes dans le bon répertoire
if [ ! -f "index.php" ]; then
    echo "❌ Erreur: Ce script doit être exécuté depuis le répertoire website/"
    exit 1
fi

# Convertir les pages PHP en HTML statique
echo "📄 Conversion des pages PHP en HTML statique..."
php convert_to_static.php

# Créer le répertoire de déploiement
echo "📁 Création du répertoire de déploiement..."
mkdir -p ../deploy

# Copier tous les fichiers nécessaires
echo "📋 Copie des fichiers..."
cp -r *.html ../deploy/
cp -r css ../deploy/
cp -r js ../deploy/
cp -r images ../deploy/
cp -r includes ../deploy/
cp favicon.ico ../deploy/
cp site.webmanifest ../deploy/
cp robots.txt ../deploy/
cp sitemap.xml ../deploy/
cp CNAME ../deploy/
cp _config.yml ../deploy/
cp _redirects ../deploy/
cp 404.html ../deploy/

# Aller dans le répertoire de déploiement
cd ../deploy

# Initialiser Git si nécessaire
if [ ! -d ".git" ]; then
    echo "🔧 Initialisation de Git..."
    git init
    git remote add origin https://github.com/VOTRE_USERNAME/getreadywithme.git
fi

# Ajouter tous les fichiers
echo "📝 Ajout des fichiers à Git..."
git add .

# Commit
echo "💾 Commit des modifications..."
git commit -m "Deploy Get Ready With Me website - $(date)"

# Push vers GitHub
echo "🚀 Push vers GitHub Pages..."
git push -u origin main

echo "✅ Déploiement terminé!"
echo "🌐 Votre site sera disponible sur: https://getreadywithme.site"
echo "⏰ Il peut prendre quelques minutes pour être visible."

# Instructions pour configurer le domaine
echo ""
echo "📋 Instructions pour configurer votre domaine:"
echo "1. Allez dans les paramètres de votre repository GitHub"
echo "2. Section 'Pages' > 'Custom domain'"
echo "3. Entrez: getreadywithme.site"
echo "4. Activez 'Enforce HTTPS'"
echo "5. Configurez les DNS de votre domaine pour pointer vers GitHub Pages"
