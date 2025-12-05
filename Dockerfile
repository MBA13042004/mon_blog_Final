FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    && rm -rf /var/lib/apt/lists/*

#Supprimer la page par défaut d'Apache
RUN rm -f /var/www/html/index.html

#Copier ton blog dans le dossier web
COPY . /var/www/html/

# (Optionnel) Donner les permissions à Apache
RUN chown -R www-data:www-data /var/www/html

CMD ["apache2ctl", "-D", "FOREGROUND"]
EXPOSE 80
