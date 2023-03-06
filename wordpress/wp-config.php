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
define( 'DB_NAME', 'NewYorkTimesCompany' );

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
define( 'AUTH_KEY',         '+_Q/*qRNtg)>LO_|Y)KsY7[>gUl,5@^Fvk5|xL6P:Sx%p;ttYN2Jt+WT {H+,=2)' );
define( 'SECURE_AUTH_KEY',  'J3,aDa&v-1,7^gr;5OlO @=Q7y69?V)y~[!vm_3LsO0-j5m{#:h]Bb89G}?v.M96' );
define( 'LOGGED_IN_KEY',    '?QPsO];SY;.c<8s$XIVIIJrdxG*Ic5g:K$qs%K6keOSC;qK!BT6$*Ca_g V{$XiL' );
define( 'NONCE_KEY',        '3~^^In_xzJSEC?2748C=_7K5]LuSJwv+}6|GFdL q[q@vsL>G7X+I][d&sB8H.%0' );
define( 'AUTH_SALT',        'YZAWQ^aFB-lg[y*~jP*S(=f/FrNqRvBwj3W)Yv>`mec8=_~Ii$ChiF?[l@R}M1=#' );
define( 'SECURE_AUTH_SALT', '3o9aO;!%UvQ!lU6GIK~oW]t$^Zjxw N%b(tWLxk6Uz0[uD[ ZS6m;)g/KQ[)sl^p' );
define( 'LOGGED_IN_SALT',   '!a3KTt#.9orNQYrt[2DUIN6k8|D[!(o)$SpZ,r48mfcLr?9fIY,pD.+@H/K}Wd{x' );
define( 'NONCE_SALT',       'LtoU4wxzZF74~nYw_zDOON8m?#%`E?b4{NZz<*V^:,xf}3!QtdP%x~kAdQqwwt)4' );
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
