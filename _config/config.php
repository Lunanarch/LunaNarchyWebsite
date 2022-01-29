<?php
include './_config/button.php';


###########################################################
#                                                         #
#                  Dev par Odixiz                         #
#                                                         #
# Bienvenue dans le fichier de configuration qui se nomme #
# "config.php'.                                           #
# Vous y trouverez dans ce fichier pas mal de variables   #
# afin de changer certaines informations sur le site      #
# comme par exemple le nom du site, son email ou encore   #
# l'heure à la quelle il va passer en darkmode, etc...    #
#                                                         #
###########################################################

##########################################################
#                                                        #
#                    ERRORS DISPLAY                      #
#                                                        #
##########################################################

//A enlever à l'utilisation
error_reporting(E_ALL);
ini_set('display_errors', true);

##########################################################
#                                                        #
#                    SESSIONS START                      #
#                                                        #
##########################################################

ini_set('session.cookie_lifetime', false);
session_start();

###########################################################
#                                                         #
#                     Configuration                       #
#                        du site                          #
#                                                         #
###########################################################

//Paths

define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -0));
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));

//Website Infos

define("WEBSITE_DEFAULTPAGE", "presentation"); //Page par défault

define("WEBSITE_TITLE", "Odixiz"); //Titre du site
define("WEBSITE_NAME", "Odixiz"); //Nom du site
define("WEBSITE_ICON", "assets/images/logo.png");
define("WEBSITE_URL", "https://harmony.inakaz.fr/"); //URL du site
define("WEBSITE_DESCRIPTION", "Salut ! Je fais de l'art et du dev."); // Logo du site
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "fr_FR"); //Langue du site
define("WEBSITE_MAIL", "harmony@42l.fr"); //Mail lié au site 

define("WEBSITE_AUTHOR", "Harmony"); //Créateur·ice du site
define("WEBSITE_AUTHOR_LINK", "https://harmony.inakaz.fr"); //Site ou lien lié à l'auteur·ice / dev du site
define("WEBSITE_AUTHOR_MAIL", "harmony@42l.fr"); //Mail du/de (la) créateur·ice du site

//Facebook Open Graph Tags

define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

/**Gestion du temps sur le site */

#CAT.3
define("WEBSITE_TIME_YEAR", date("Y")); // Année
define("WEBSITE_TIME_DATE", date("d/M/Y")); // 05/Janv/2010 (exemple)
define("WEBSITE_TIME_HOUR", date("H:i:s")); // Heure
