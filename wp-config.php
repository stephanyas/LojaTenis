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
define( 'DB_NAME', 'lojatenisbanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '>mO %9(joM^=NY5SdfSPiWODT2p=yJ|IB/I?MOw|+s5Z8Sn)6jeW=!B+nS#9Ga7z' );
define( 'SECURE_AUTH_KEY',  'I#5RCD%udA;WgehgpTsy-uHpKtNE*__*ORoF9?2=K@>NFR3gj,TZ[ZK`}z0eGV3Z' );
define( 'LOGGED_IN_KEY',    'C]i4i+P*o]4@+j8.3Hu^;<0.2DVmS8$^fn<Vq;|wSgo<)qJh5]t`~Ovy(4Q~OP>_' );
define( 'NONCE_KEY',        '<^y^0!?EeL)Ja>nA^/`*0,6;:Ns^.lQ(GA;0Rmtai76>a/.zAYhU.|qj<_zC`kHo' );
define( 'AUTH_SALT',        'Wh{!>aN8?-k>:<>FAmn|E=b,wg N.^pdh^=n)hdC)~MiC0#r Epr+)-;ch@t|]ds' );
define( 'SECURE_AUTH_SALT', 'QMovR#ReGTkA=wiGHB.svW[rwLR<]~Z`(fLzxiBu87U42Y;6=^YeGk WsAvWHj*S' );
define( 'LOGGED_IN_SALT',   'GVtb8vc!u:C@|sInCK9f9ADGOc([JaF&>M+W>,Yi-z[$+[~Vrg.`sMsE04whD2aP' );
define( 'NONCE_SALT',       'qQx]&(/w|c9oY6ei+)Wt)hW#Au$~q]`kkN!-|qc{j[{<N+Q3|j4p):m(J6)Qf^`e' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wplt_';

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
