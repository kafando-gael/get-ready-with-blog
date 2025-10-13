    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Get Ready With Me</h3>
                    <p>Application mobile de marketplace moderne développée par LASERT SARL. Connectez acheteurs, vendeurs et livreurs sur une plateforme sécurisée et intuitive.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Navigation</h3>
                    <p><a href="index.php">Accueil</a></p>
                    <p><a href="about.php">À Propos</a></p>
                    <p><a href="features.php">Fonctionnalités</a></p>
                    <p><a href="user-roles.php">Rôles Utilisateurs</a></p>
                    <p><a href="kyc.php">Vérification KYC</a></p>
                    <p><a href="testimonials.php">Témoignages</a></p>
                    <p><a href="contact.php">Contact</a></p>
                </div>
                
                <div class="footer-section">
                    <h3>LASERT SARL</h3>
                    <p><strong>Adresse :</strong> Ouagadougou, Burkina Faso</p>
                    <p><strong>Site Web :</strong> <a href="https://lasertweb.com" target="_blank">lasertweb.com</a></p>
                    <p><strong>Directeur :</strong> Gueswende Kafando</p>
                    <p><strong>Équipe :</strong> 8 professionnels expérimentés</p>
                </div>
                
                <div class="footer-section">
                    <h3>Fonctionnalités Clés</h3>
                    <p>• Authentification sécurisée JWT</p>
                    <p>• Vérification KYC complète</p>
                    <p>• Gestion multi-rôles</p>
                    <p>• Marketplace intégré</p>
                    <p>• Système de livraison</p>
                    <p>• Paiements mobiles</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> LASERT SARL. Tous droits réservés. | Get Ready With Me - Marketplace Mobile App</p>
                <p>Développé avec ❤️ au Burkina Faso | Architecture microservices | React Native & Node.js</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Simple scroll animation
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        });
        
        // Add fade-in class to grid items
        document.addEventListener('DOMContentLoaded', function() {
            const gridItems = document.querySelectorAll('.grid-item');
            gridItems.forEach((item, index) => {
                item.classList.add('fade-in');
                item.style.transitionDelay = (index * 0.1) + 's';
            });
        });
    </script>
</body>
</html>
