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
define( 'DB_NAME', 'studi_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'y_oIY1Q*C>v~,.(Sf{ox>Av1Pnw2e3^-_9civEb&yhjbWU6!G%}8`I}EDX)5!TqG' );
define( 'SECURE_AUTH_KEY',  'p>viQMCb;KJ/:f7^2@es(%M~#{GX 2;]VOw$Vplot?LDx_3`M?&aso4-MD56x1=,' );
define( 'LOGGED_IN_KEY',    'KR@Xe8QtXWp.3!7=?!e3oJ|_emZpY?hfnhuR4.;6 ANe0Z<K[;Eswy$>pJ77P,EY' );
define( 'NONCE_KEY',        '1MR9y{eL4X5L3^-Jb3%s8ePAWfhL=K8tJrnyXbo`&Y(+HVw2?lE3WIpqbyBG|!`/' );
define( 'AUTH_SALT',        'f#bw<F:b#/<lzs9%V/)E]S!&MMFPBiv?5?WbAC:G}dV=xV@4Pzh9=TGMzh9Ge-yo' );
define( 'SECURE_AUTH_SALT', 'YDbQ9Z.kPNn99W:lYJ%*E@j$lzJf?,nipiNjX%V+#S50k57g;eRqVJ0s+Sz<^Y~V' );
define( 'LOGGED_IN_SALT',   'wI=e_a7{{4Ozg#+Ij3&Lyl1p[!fgS1<j+`Pu*jl^3y?f@Y|qW;3mRRrq^hAx W4|' );
define( 'NONCE_SALT',       'uRIhK^*]}:>gO+8lj(1>A7%WA2C~tqN_v32+o2bCB6t*0d3pf0J*|$dtI F~;TW~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'studi_';

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
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
