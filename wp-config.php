<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$GBV}1:`y@-5Yn,Om62d8(_@4[{zsL#GH[>wo[.Ls`xOu jj}6K;=vNJ]pr63+rx' );
define( 'SECURE_AUTH_KEY',  't(EUp:<#oPjl`SQ4,kNJq%R{;>lw0`o-:os~/TC|hji?zS_Thtxm~Q~?eVt7!RK]' );
define( 'LOGGED_IN_KEY',    'Nt@dm?=557/,9tqtU=3,,wF)Md.EsDexupvOi!A0r)aR&#roF%EPBZ!XN$zDQw(N' );
define( 'NONCE_KEY',        '/.MvyE qHsn<2j>^(d*nwn9BV |O{TUf} Jfn:NZ_fL41}y]QrX/iv(Rv2xW(jZH' );
define( 'AUTH_SALT',        '<yeJHax-jwB?y-ku`w @xYR5TTe6?kwlG}&FpJga[@Lp$jds&Do4+6O}%.P=f(#?' );
define( 'SECURE_AUTH_SALT', 'C<wE>p`IquUG?3J~+L#TO0kF=jotI[^t=V@bH}kDQAa~nw(@SoNstp7H-nQprGdB' );
define( 'LOGGED_IN_SALT',   'xORJHB;`JXevJ49_1(k-/+j&(<7(ZrH+%w>75qO0GU[5}V.J@FO<M-|1336-CQt2' );
define( 'NONCE_SALT',       '*i~ d,f7b(V>+[%F#Yfp4B:t*A_)y=z*pffOi|}s8;U1kl#@P%E:16bd#Wm!p]f/' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
