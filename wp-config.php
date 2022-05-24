<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'rocioch' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'L,;Et1_QZRkc$(%?$q#x#cy?Z?6C(-,Cz?zpP?$O2]KxHDkuS.`s-ri]WN*Hu?~v' );
define( 'SECURE_AUTH_KEY', 'pZfZPy4rslj8V9]6OK 9tIB4-J<=+Q>P$*k`-d@{P`<K/;)Z&53xg-i ck#gj}2V' );
define( 'LOGGED_IN_KEY', '!OKZ[f-U30Q{rzY9<U6y:r:S,liv(XUdPjobp`N jBHoZ?Ru,u|J!.U6aq>{!$8w' );
define( 'NONCE_KEY', 'FE=#tjc wv$x3kcRYjbhp6B3_Tbx8ha~{8nq9</S(2V{4Hw!F9c/;kSqS)F=&wvp' );
define( 'AUTH_SALT', '.8Os;NG,Y>Y718?H66._Gj4Kclof1 M]Hex2Y;.I#r5N%+F}EdAGFJ@QA;H702kn' );
define( 'SECURE_AUTH_SALT', '9>]g0Wh`k| Z9XRO&T$k:W3NjYkD< OSrGmwX],;x]>mmlvg7S[9Pt4_A;d*NV?&' );
define( 'LOGGED_IN_SALT', '<PY8{D#c$g/B&b,H&]mh^OFrl1TWlo3F Y=qh/wPF4E*lJw#[tU*zqP$>C`[(zw&' );
define( 'NONCE_SALT', 'FK%H#*ndnWO+j0Fa>E-?,0:{VPRzoesfLx/:$:9DUYCA*#$+pm7?Jk8P+DGU%GNl' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_c';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

