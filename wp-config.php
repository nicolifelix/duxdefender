<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-dev' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root-user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root1234' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql796.umbler.com:41890' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cJ6dXO_sj)f={Q2)U};9DgB]in]0Vs#U53r^<4=|CcG~7QZYwt,#`1YilC]Xa]M$' );
define( 'SECURE_AUTH_KEY',  'dzviJ?)cS,2}dX2&hne?N7yy(7Kv-^$~qHw|o?t,suep<vo47|uo;+G<w-ZpX%I]' );
define( 'LOGGED_IN_KEY',    'tzP8+!yu>aA)CLT^z# 68P@{SsU^stG[*k[rkf}YF>evrO$NEoFqmY+Z7RoQj@ $' );
define( 'NONCE_KEY',        '5W60C~Xx9xP2Yk0OtLc$m,PGS!2WMZW |?PYxUNo9@1b+g-%WX ~` >mGZ7w5Wp ' );
define( 'AUTH_SALT',        '8zH!,&_`lrs.0HI@_F+juDJDKjNDOP%|44hrf%?BSnjrj_kJ7S;n7!K:1ePyq.?K' );
define( 'SECURE_AUTH_SALT', 'O%sU>lP?c,G)58V{RRZ`|rjB=<M}n=&c}e`3z4:>DXGi_q*@wCVxEe3gu3+ae&_A' );
define( 'LOGGED_IN_SALT',   '@`g&LkK .k/pA@au0 W++pKsqX{FlAFAc$HifDyo8%b7>L|eEJ-O.R+2$^];#S;6' );
define( 'NONCE_SALT',       '~Qhe%KAQ__wRP+>[5%:_.DCw%2FdV3ISbK}yLn-oeQKs-kEy_TVl=aNUF,avs2}3' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
