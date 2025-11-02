# LesBoutik.com

Site web informatif pour la plateforme marketplace LesBoutik.com développée par LASERT SARL.

## Structure

- `about.php` - Page principale "À Propos" (source PHP)
- `about.html` - Page principale générée pour GitHub Pages
- `index.php` / `index.html` - Redirection vers about.html
- `includes/` - Templates PHP (header, footer, seo)
- `css/style.css` - Styles du site
- `js/main.js` - Scripts JavaScript
- `images/` - Logo et favicon

## Déploiement

Le site est déployé sur GitHub Pages. Pour régénérer les fichiers HTML statiques :

```bash
php convert_to_static.php
```

Puis commit et push les changements.

## Développé par

LASERT SARL - Gueswende Kafando  
Site web : https://lasertweb.com
