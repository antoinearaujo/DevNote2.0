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
define( 'ENABLE_CACHE', true );
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/DevNote2.0/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'devnote2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'simone');

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
define('AUTH_KEY',         '#wCLqOE/urGcP3PkR1c|0~#?eA_MwHh7u+PNG2s?6+k2h1P}72*U459n& BDc& U');
define('SECURE_AUTH_KEY',  'K6?V?~RilRa?t G95VzK%qt#,$b|Wf%-+0#cZWJnG[rDU@b%v~K1LW?9Upxl}0Pa');
define('LOGGED_IN_KEY',    'V<*4Gf/uBT+ lr(D~L$?D8!+H~Rk/b:kHVlwTnIOWJjuY_={n_ x 6k/JSdtL9Uk');
define('NONCE_KEY',        '9F{|Slg@n]}*[#rH813TU]sox&[g0imp*w&?4E8*}|e+O$4h TjG-)HCX$q+<,8B');
define('AUTH_SALT',        '-KBZCqqK<$jgzL{OB40%BekGL`,]T-AB(D+8`is.naw$w${3sUAa2bYrgqzXIuL}');
define('SECURE_AUTH_SALT', '1.oS+[Vm$y^umg`hA~qv/<Hyr]|+[RanOYahha!Mu|X0c{}EpWf!SZ$ry6kgyp{@');
define('LOGGED_IN_SALT',   'gQ0M F5ps@^bPcIm%fVM<X(>#F$6Uq3}gIdyLm?=!Z)S]rVfM1^r.<U*F@s*Mb7v');
define('NONCE_SALT',       '`c4/Lezt?7ywYZE@u;[%(cL~O:?9U!S~`OE-_|=yfL2~[4#%JkdQ/d<@/ WlrA;)');
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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
