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
define('DB_NAME', 'tregastel');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{3>-Ny5[p_9Y$PHBP#lSwJ&V=ID5x1-,7_$o6Gy(n.GZJ(r{O8)V]08n2te!wmZH');
define('SECURE_AUTH_KEY',  '25Lds4[<-d:` 5jyQZRg|BDN.vdI^JjToM59qJazy{<mwJqoai|z|Ycm+w.Vc/uc');
define('LOGGED_IN_KEY',    '#+5}TE&M5fv6St6T_`ulKW6z$.DTUbGAzom]~J@x|nug[[qz$){+cWDQ>/qx6=5:');
define('NONCE_KEY',        '):gS;Rhy#c5Z3r5/LuuY!.[?-+W*%P(UbiF%.8:5Nhj2x2?bimm-YGiUR.+AdT0.');
define('AUTH_SALT',        '3[l]S;hccJnt9gQ3(2P)d+Sj4i6$qTA8>?Vn2YmxUnzt9_6T=H3f_JoeZ.nJ4B*o');
define('SECURE_AUTH_SALT', 'dts^Xq/gEU#0;$|BeDXj_3B#`R8XQdX0{ahw t=!wbZLvMWYsYM1d1~x3.z3(ksx');
define('LOGGED_IN_SALT',   'VaL$;mLfQYHC>P.9U3Akt$9dZ2qu(_bG_F||F1._;2#=iDA8zVQy9#6M8zX5+:9K');
define('NONCE_SALT',       'gh@Hv*^!TV~a_Tz@!j&3fkByjk<)7<}C.&&l]d/Qj]+Khu;U=~CkXf>@aCU~^<FN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'yd_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');