# Odixiz
## [Site internet de présentation](https://harmony.inakaz.fr/), et bio.

Salut ! Moi, c'est **Harmony**. J'utilise les pronoms **elle et iel**. Je vis en **Bretagne** et j'étudie au **Lycée Expérimental de Saint-Nazaire**.
Je m'intéresse aux **arts**, **aux sciences**, ainsi que **l'informatique**.
Je défend les droits **LGBTQ+**, **l'égalité et la liberté de tou·te·s**, **l'anticlassime**, **l'antivalidisme**, ainsi que les **logiciels et l'internet libre**.

### Tu peux me joindre via : 

* [**Mastodon** (eldritch.cafe)](https://eldritch.cafe/@chasociale) 
* [**Telegram**](https://t.me/odixiz)
* [**Mail**](mailto:odixiz@42l.fr) 
* [**Instagram**](https://instagram.com/chartiste.bzh)

### Je fais de la musique. Tu peux l'écouter sur : 

* [**Souncloud**](https://soundcloud.com/odixiz)

### Je fais aussi de la photo, que tu peux voir sur :

* [**Flickr**](https://www.flickr.com/people/194672187@N07/)
* [**500px**](https://500px.com/p/odixiz)
* [**Pixelfed** (pixelfed.social)](https://pixelfed.social/Odixiz)
* Tu peux également trouver la plupart de mes photos sur Instagram.

**Il m'arrive de dev**. Tu peux aller voir ça sur ma [**page de profil GitHub**](https://github.com/ODXZ).

Ah, et **je suis une personne autiste**. Merci de communiquer avec moi en utilisant (si possible) des [**indicateurs de ton**](https://toneindicators.carrd.co).

# Mini doc

## Avant de commencer
### Avertissement

**Ce site n'est pas prévu pour être utilisé par d'autres personnes**. Cette documentation n'apporte donc que **le minimum** pour le mettre en place. **Quelques connaissance** en **PHP/HTML/CSS** ainsi qu'en **hébergement web** sont **requises**.

### License

Tu es **autorisé·e à réutiliser mon site internet, peu importe l'usage que tu en fera** (personnel, commercial). Néanmoins, **le contenu de celui-ci ne t'appartient pas** (images, textes, etc...), merci donc de **ne pas le publier sans modifications**.

## Installation et configuration
### Téléchargement

* Le code source de ce site est téléchargeable [ICI](https://github.com/ODXZ/Odixiz/archive/refs/heads/main.zip).
* Il est également possible de le cloner avec la commande ```git clone https://github.com/ODXZ/Odixiz.git```, dans le dossier choisis (```cd dossier/dossier```), sur Linux.

### Hébergement

Le site fonctionne principalement avec le langage **PHP**. Un serveur web est donc necéssaire si tu souhaite le modifier ou l'héberger. 
Si tel est le cas, il te suffit de glisser les fichiers du site à la racine du serveur web.

### Création d'une page

* Afin de créer une nouvelle page, il est important de créer plusieurs fichiers comme ceci : ```nomdetapage_view.php```, dans le dossier ```views``` - ```nomdetapage_controller.php```, dans le dossier ```controllers``` - ```nomdetapage_model.php``` dans le dossiers ```models```. 
* La structure de la page (HTML/PHP) est à rédiger dans ```nomdetapage_view.php```. 
* Le code **CSS** est à rédiger dans ```assets/css/styles.css```.

### Configuration 

* Un fichier de configuration du site est disponible dans ```_config/config.php```. Certaines informations sont à changer dans le fichier ```site.webmanifest```, ainsi que dans le fichier ```views/includes/head.php```.
* Un fichier est dédié à la personnalisation des icônes sociales : ```_config/button.php```. Pour l'affichage, j'utilise [Fontawesome](https://fontawesome.com).
* L'îcone du site iternet est à changer dans ```assets/images/logo.png```.
* Afin de **personnaliser le thème du site**, des **variables sont disponibles** dans les premières lignes du fichier ```assets/css/styles.css```.

### SVG

* Ce site contient de petites **icônes SVG** (drapeau LGBTQIA+, demigirl, libertaire, etc...). Il est possible d'**en rajouter de nouvelles** en créant un/de nouveau(x) fichiers dans ```assets/svg/nomdetonfichier.html``` et en y collant un code SVG facilement trouvable [ICI](https://commons.wikimedia.org/wiki/Main_Page).
* Afin d'**afficher une icônes sur une page**, il est necéssaire d'y **inclure cette ligne** : ```<?php include './assets/svg/nomdetonfichier.html' ?>```

### Menu de navigation

Le menu de navigation est **à modifier manuellement** dans ```views/includes/nav.php```. 
