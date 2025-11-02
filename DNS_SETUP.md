# Configuration DNS pour lesboutik.com

## Instructions pour configurer le domaine sur GitHub Pages

### Étapes à suivre :

1. **Sur le registrar du domaine (là où le domaine a été acheté)**
   
   Vous devez configurer les enregistrements DNS suivants :

   #### Pour le domaine principal `lesboutik.com` :
   
   Ajoutez **4 enregistrements A** pointant vers les adresses IP de GitHub Pages :
   ```
   Type: A
   Name: @ (ou vide, ou lesboutik.com)
   Value: 185.199.108.153
   TTL: 3600
   
   Type: A
   Name: @ (ou vide, ou lesboutik.com)
   Value: 185.199.109.153
   TTL: 3600
   
   Type: A
   Name: @ (ou vide, ou lesboutik.com)
   Value: 185.199.110.153
   TTL: 3600
   
   Type: A
   Name: @ (ou vide, ou lesboutik.com)
   Value: 185.199.111.153
   TTL: 3600
   ```

   #### Pour le sous-domaine `www.lesboutik.com` :
   
   Ajoutez **1 enregistrement CNAME** :
   ```
   Type: CNAME
   Name: www
   Value: kafando-gael.github.io
   TTL: 3600
   ```

2. **Sur GitHub**
   
   - Allez sur : https://github.com/kafando-gael/get-ready-with-blog/settings/pages
   - Dans la section "Custom domain", entrez : `lesboutik.com`
   - Cochez "Enforce HTTPS" (après que le DNS soit configuré et vérifié)
   
   Le fichier `CNAME` a déjà été mis à jour avec `lesboutik.com` et `www.lesboutik.com`.

3. **Attendre la propagation DNS**
   
   - La propagation DNS peut prendre de 5 minutes à 48 heures
   - Vous pouvez vérifier avec : https://dnschecker.org/#A/lesboutik.com
   - Une fois que les 4 adresses IP apparaissent, GitHub détectera automatiquement le domaine

4. **Activer HTTPS sur GitHub Pages**
   
   - Une fois que GitHub détecte le domaine, un certificat SSL sera généré automatiquement
   - Activez "Enforce HTTPS" dans les paramètres GitHub Pages

## Notes importantes :

- ⚠️ **Supprimez TOUS les anciens enregistrements DNS** pour `getreadywithme.site` (si vous ne l'utilisez plus)
- ⚠️ Si vous gardez `getreadywithme.site`, les redirections automatiques vers `lesboutik.com` sont déjà configurées dans le fichier `_redirects`
- Les redirections fonctionnent via GitHub Pages et Cloudflare (si configuré)

## Vérification :

Pour vérifier que tout fonctionne :
```bash
# Vérifier les enregistrements DNS
nslookup lesboutik.com
dig lesboutik.com

# Vérifier que GitHub Pages détecte le domaine
# Allez sur : https://github.com/kafando-gael/get-ready-with-blog/settings/pages
```

Une fois configuré, le site sera accessible sur :
- https://lesboutik.com
- https://www.lesboutik.com (redirigé vers lesboutik.com)

