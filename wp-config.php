<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'etumiam' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-OVvaBBVIa=1`I=#-lhpX+x(Z)3`Z^EyP^a9`.xFN4m.`({O7iuyVH#Pk%[(wXz|' );
define( 'SECURE_AUTH_KEY',  'fBL1@nppH8)T ~GedXTyx}[Z|.^US&;d$GbF8H!vQ-?{]RZ;prK7@Q#jvr@CKwpH' );
define( 'LOGGED_IN_KEY',    'c:n)&M1xfE@zD0uNiF}UD8XsgmG&8H?Q^W:0wy&25YWym72H~5K1LE,hL%d3mq85' );
define( 'NONCE_KEY',        'wR`mO[n`9E(xmMpu<(e7U?:QCmtoJ5B:>Gwku0itw1f&.H&Lp=3D/>IO=cj}p6_l' );
define( 'AUTH_SALT',        '.oLhQ~J/7t!-a/?h{ $h4P{=YKq`^[j6{=0YTefUj#BmlV;aL+xQ<^^*6!_o,ANl' );
define( 'SECURE_AUTH_SALT', 'JDE?-hp?WK2[%m72jx1Dihp`R$n}IdE|9-]DO&A~/Wj/5Q9<!n$<IoH KCh%0.+D' );
define( 'LOGGED_IN_SALT',   '~!g=xx<Y*2T!_t&7tVN_1h7tcfq@;Q%{21a[LwO j`g~kum^3:rGUoP*:f@X2yCH' );
define( 'NONCE_SALT',       '?:R>wM@>3S#Vct(+./U}}bs>C{P1ZK.zg#>eXkl)Jm:}bb<kXIN?+mD;d7Vj7MxT' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
