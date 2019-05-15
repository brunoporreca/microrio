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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'microrio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:8889' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         ':&aVzk_L21BOhULKg4,SiT&n{W)3`K+JsJRniw[vSP<G] |v;,Ng[s,!klsMi{x1' );
define( 'SECURE_AUTH_KEY',  '}k>/eWH0PIm!cOB7`6C#oMZS?.i;lfS::1f&g0m_%4TJ>VRq`|d67Ozpwp;AYg-0' );
define( 'LOGGED_IN_KEY',    'S.+flc[OZ[/u2^OM$V1*G%6tc1<_Q{sk,?i%]qjLRXA5dZ;Q#[{6488djr-fl&BK' );
define( 'NONCE_KEY',        'Dh:f~/|tw{iV7Uo49v+z{mX<]49s@,DXu`#]8},TYdm21^Zi&cA0uPy$u 9^J?oz' );
define( 'AUTH_SALT',        'phmhL+SAwj{vY6h2s-.&;d~f;`l8%Pk`;3btNrt#+=V0*o*IeAqJ+0|?gbE|cQ}L' );
define( 'SECURE_AUTH_SALT', 'M.[Q|<d[;Fk]Dk1Itwlq?#Y{9rn?bML}oTXHBY|D;{8)c20c6t_<(ho!kaiTGF_`' );
define( 'LOGGED_IN_SALT',   '|BA=n]H5J w$HKyz!$pb{iyw#ShHrh@.4N(/?H@?NQE1/` QD`; U+P6SPT8/dOx' );
define( 'NONCE_SALT',       'kKBqTFl}-bhv|e_U&(H]+|8WDlMFrT@.4^j:jA,e$L,p.epQs%n|,e?|YcjQK%%~' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
