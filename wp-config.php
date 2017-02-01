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
define('DB_NAME', 'aire_gym');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dfK18dKNv*t]c8g|[QZ;%#19j/*dj.NT+Y;[4P6~DBsWMRZ*71+a3} t4K1F.!xw');
define('SECURE_AUTH_KEY',  'bIjv.@:$9|h`>.Qy&kdE(,;r?:(O},<wpM#%2UFR]Q5xHjsU:XevKim~EB&/u)OU');
define('LOGGED_IN_KEY',    'v;r7.*ggRxZ%fYNUB%C(jP3]`[j<a+a<Ah!,j@9W3vRtqA.#y=e2.|TkA:KxYIMe');
define('NONCE_KEY',        '/s;Fkqi81{sgfYo<|2n&Jv3f)B(R9WG/CTqbZ/F(LOF/e:x?Oo3]7r:,o-6u9x8a');
define('AUTH_SALT',        'e<(`nVk:mjL`&G84tcSbbLn?(&rCx-o8ar*36]{p+cg]]@Pq4 J:_Y+?O@FZRL3z');
define('SECURE_AUTH_SALT', '&%damy}kK:j+_YhJw#(K{]Mv DAeaR2~-qg~1R1sI{exL:^&R--^bJ#Z}P[xasB|');
define('LOGGED_IN_SALT',   '#L:voCMsKly4qMJz^OIJpWR%p5(h``oHedk]E:[aT$J.ksJZy_1JrETB5qfH+.n=');
define('NONCE_SALT',       'b+nzwu9N4_?y3k_CK[r`6u4T27%;mla]];ko!=VL&6e`+_uGE@E/z:R^Wda%/E0>');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'aire_';

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