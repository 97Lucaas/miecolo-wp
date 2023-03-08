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
define( 'DB_NAME', 'miecolo-wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' M4& ^Gf=e>sl$4NY[ejy lSk<N{~{.0`a0bR0@( X>Ffig,9.U#>(qAWRs&s:8n' );
define( 'SECURE_AUTH_KEY',  'lFzzLVMW^LoGc+*T{gWN/&;i5i?Irl62[4[#a#2>rMA{mv`xd&ht%al%Hi)Ra4?J' );
define( 'LOGGED_IN_KEY',    '4#VyrXXhNl)$[eK(@vnU*qmR&]DSp.#BjS4A@r8v4O,8D#pv6?D:mYWe^kvUHU</' );
define( 'NONCE_KEY',        'lV#cSubO]N(,3mRVXLwBS=L`ySYfa_o%L>)uE5U*f9RDW/b^Y?oQ~>:_RTD]0vVm' );
define( 'AUTH_SALT',        '@-FwEQte>`~Al):IxN22Fu$QFE4t7e*bW{xzw&HvyRFglTA/+[xo0BUK:8zqWais' );
define( 'SECURE_AUTH_SALT', '`)|s`-_kR]*yJ:5ZoPk|r#US#T:2$-G1 }q^8$,~dW+%(:]WI>r?h#RV_=<!>%UI' );
define( 'LOGGED_IN_SALT',   'NWd%/;8Y>MDk}[G<jw.Fk6ORhrbhJ-4-~IZffsU>.JmxxV.JRoC##K=*9i}OGM6r' );
define( 'NONCE_SALT',       '8 :HFElNw_R}Fb2+qn[OtY~NXhpZOa/m)WVQBIvSO @uP5&D/czp;s}YDZ$qQLs+' );
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
