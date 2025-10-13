#!/bin/bash

# Script pour préparer le déploiement final de Get Ready With Me

echo "🚀 Préparation du déploiement Get Ready With Me..."

# Vérifier que nous sommes dans le bon répertoire
if [ ! -f "index.php" ]; then
    echo "❌ Erreur: Ce script doit être exécuté depuis le répertoire website/"
    exit 1
fi

# Nettoyer les fichiers HTML existants (sauf 404.html)
echo "🧹 Nettoyage des anciens fichiers HTML..."
rm -f index.html about.html features.html user-roles.html kyc.html testimonials.html contact.html

# Convertir PHP vers HTML
echo "📄 Conversion PHP vers HTML..."
php convert_to_static.php

# Vérifier que tous les fichiers nécessaires existent
echo "✅ Vérification des fichiers..."
required_files=(
    "index.html"
    "about.html" 
    "features.html"
    "user-roles.html"
    "kyc.html"
    "testimonials.html"
    "contact.html"
    "404.html"
    "CNAME"
    "robots.txt"
    "sitemap.xml"
    "site.webmanifest"
    "favicon.ico"
    "_config.yml"
    "_redirects"
)

for file in "${required_files[@]}"; do
    if [ -f "$file" ]; then
        echo "✅ $file"
    else
        echo "❌ $file manquant!"
        exit 1
    fi
done

# Vérifier les dossiers
echo "📁 Vérification des dossiers..."
required_dirs=("css" "js" "images")
for dir in "${required_dirs[@]}"; do
    if [ -d "$dir" ]; then
        echo "✅ $dir/"
    else
        echo "❌ $dir/ manquant!"
        exit 1
    fi
done

# Afficher les instructions finales
echo ""
echo "🎉 Préparation terminée avec succès!"
echo ""
echo "📋 Instructions pour le déploiement:"
echo "1. Créez un repository GitHub public nommé 'getreadywithme'"
echo "2. Copiez tous les fichiers de ce dossier vers le repository"
echo "3. Configurez GitHub Pages avec le domaine 'getreadywithme.site'"
echo "4. Configurez les DNS de votre domaine"
echo ""
echo "📖 Guide détaillé: DEPLOYMENT_GUIDE.md"
echo "🌐 Site prêt pour: https://getreadywithme.site"
echo ""
echo "🔍 Fichiers SEO inclus:"
echo "✅ Favicon multi-formats"
echo "✅ Meta tags optimisés"
echo "✅ Open Graph & Twitter Cards"
echo "✅ JSON-LD structured data"
echo "✅ Sitemap XML"
echo "✅ Robots.txt"
echo "✅ PWA manifest"
echo ""
echo "🚀 Votre site est prêt pour le déploiement!"
