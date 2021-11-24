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
define( 'DB_NAME', 'seguranca2021' );

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
define( 'AUTH_KEY',         'oIJ)6y{E5,ZY1fqvC?wig{|w#MqDd#xs88f_&cG>&j8BU+ByIF@q,lP?rC-Dc<J&' );
define( 'SECURE_AUTH_KEY',  'sB>6aveTK_|)GSS6Ao?B[ !=J*/g7x]-qOA(,h8BH3A3Xc:F2B882lXZLJM*Gj3@' );
define( 'LOGGED_IN_KEY',    'nE=2Y AC3#c 9zH(/U@V04){}-3_[{AdW-{/-+{5SZ2c>Lg;H^w-PgZ(XwhX3(Py' );
define( 'NONCE_KEY',        'B)WP$q6y):#b`r3$Fyxh.^fr3rs,2MEF F g];(5&(=YN:%u]dDPT@H=2;-8Gb)>' );
define( 'AUTH_SALT',        '/J@J4#TX4CBuOR{g[UOH|8zTR9S(U@fsW;0#;/h@YxrN7k 7UA)>(&Zsa)]I3}S,' );
define( 'SECURE_AUTH_SALT', 'pqd%A6=a5d2UITcCFf1tr$J*joo.Fm*WH7*#BUQ|+*u^!DPL9M9FUt}fCc<[I`<:' );
define( 'LOGGED_IN_SALT',   'w;G+]R{/)jq#X!wBMk`sCP}z}A#m8h2~)-+_6d3C#J$W%1dLMc!%8ZNI{9RE~]Ml' );
define( 'NONCE_SALT',       '$VIA0WFvojX(7(2bL2TLX?S]|BS6()4m0n(:{w0SaTKLaWioZQ`AJH4X,7@?V=S3' );

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
