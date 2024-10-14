# Utiliser une image de base PHP avec Apache
FROM php:7.4-apache

# Exposer le port 3000
EXPOSE 3000

RUN apt-get update && apt-get install -y iproute2
# Copier le fichier PHP dans le dossier racine d'Apache
COPY index.php /var/www/html/

# Activer le module de réécriture pour changer le port
RUN sed -i 's/80/3000/' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Démarrer Apache
CMD ["apache2-foreground"]
