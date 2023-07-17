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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty_2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-txN[y+M{I$7:`pu`--J,d$kOakT()QuABk.68DtUMef?7P~~,mHp[7+x&u^)O@L' );
define( 'SECURE_AUTH_KEY',  'g[PW+5&o,,mcj|x`C_k[HeAkY)66o;s0apqMum>Z2[SY4r]y|<M+#?B?*t6DB)@U' );
define( 'LOGGED_IN_KEY',    'fJ5Uisu(jx%|%[2meGAE)k8/%j#M vbG&lw[SOlF#9n`wn<hVB5ZdZ6)D2[fbj|z' );
define( 'NONCE_KEY',        'j?&)@%o,K~iLkjN<.gBiG@ qd4%~mq;I&?u!03I{#r2o@XgQXlro]U:0;M0V=M0#' );
define( 'AUTH_SALT',        'a3.:NV;zp!G|[D!471UxEodkOcR>C&OLPGpJD&(`ZL_PQD@u|mcEKIqo&nl:8K8.' );
define( 'SECURE_AUTH_SALT', 'l`!uN4n;b/ZUe55b]m?>)O*P84/RD4KJ&3|/2FS{5@u+xSr{Qt4x|{Kn14)9Qo/Z' );
define( 'LOGGED_IN_SALT',   '`c4Z=igKI,m*zGOe1LG/bWb7R|!<83jkGwd04R8Bd  +3.yCQER*7IaskcahKg`P' );
define( 'NONCE_SALT',       'Y8-KN.U8Vu?(1}P.cqP_R$Fx2Aw+L[Jya9uNk<K(k- 7FLaLRN,WHpZ*<V^R]s%*' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
