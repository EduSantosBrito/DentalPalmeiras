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
define('DB_NAME', 'wp_dental-palmeiras');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&_X^%&B.lHAm|KqJ+uH`9MiBf]?u,{<v:$s=^ Igc@cpeZ2Eu0.EWf;iNo9uPS}/');
define('SECURE_AUTH_KEY',  '7Z8$@P1#uny6*=OeWCalps~9_~ ozv9ZWU<~]Zk&6UvIdmOBEb<wJNIGY2{~1n)&');
define('LOGGED_IN_KEY',    '@=ath.7F1/S[;J8ZT&A$b>.$dXd8wvWP>.6yqo-h86|)K%HdvaD)pY`~*`NL{NOr');
define('NONCE_KEY',        'cMPj0aiIpnqT`w&@6}<k=(d..|0]BW}FHHw~5l?,$FO~?(Sw:@)~J^J7;jzrILlj');
define('AUTH_SALT',        '@aXa2xuBj=A=chfJuS%xWDcBn=@nb;$+qnGLTT*).os(M KL==x.)ZXzyB|8=^Z?');
define('SECURE_AUTH_SALT', '|jrt*_cBbM:-7|#uI9SgM_[fJZp~$fEE%#|..u5ZW_V:9~2a1VnU{&tJvRP;A?1I');
define('LOGGED_IN_SALT',   'E*7{y qp*RF (0{kpgBu:6E1M<)>#;8bQJ~>&9SLphe`l&PPdyQ<(2zi.$W8hkSr');
define('NONCE_SALT',       'R|I:,W?5`tW]w!Sxt;6= |J:20q{~(;oXcL5Y$o-fD.m2V *(lyYtqY.r($(er^U');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
