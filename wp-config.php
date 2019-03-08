<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Candice' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mo)2_s{Q*6+xV5=%Z]a,dH}zaqf9paIWd+Y[Mf,D#?LRAU[%Eg~7?<oW+Y[9Jj#%' );
define( 'SECURE_AUTH_KEY',  'DVR#VkU<Y {$xX$I Zm~-C[lveJWyi$??7yX[op#GZRpH1.TptyQ/w_KYvij;)&Z' );
define( 'LOGGED_IN_KEY',    '.ltl| LUeFvV0qcF5KsND{E_VKnVUbNtta*?N[eH.15_GjlUd>{[(Pj!9=O74HI)' );
define( 'NONCE_KEY',        '9~s~(K0H*Xni cnz4!(VHZFYy(<64~[&#nBH01ydFds_lFAgs?p!/rs^cC} 34dP' );
define( 'AUTH_SALT',        '>7s#b(l$Xj9T,F@BY2V]?Qd;uM+,s4#G8&GiHnPiX6[mq<X>_ATI7s@7SA)Jjn^9' );
define( 'SECURE_AUTH_SALT', 'olSyU?8`*DCSY12:2^m0fEcRw ihYU.F02VdpdcxBncLYiyXd/q}p:&Qo%|[#y2R' );
define( 'LOGGED_IN_SALT',   ' lF7v40#uq |LOUo43;e$aVg08r_LhWs`Pea!dXzQZ`slSDNm@=PhvS,-%r}HxL}' );
define( 'NONCE_SALT',       'c$XH`J1ab!9o7(+$<]6RCd{_MO&f~v+7!G~+`n.C5=_5uucm6IT{vIyD<CSG6[?c' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');