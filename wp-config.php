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
define('DB_NAME', 'sehloiro');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'felipe');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'iaezx9a9');

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
define('AUTH_KEY',         '>=!1-D,Zq8.&q/TWa)SoE-4_1qGo8~d#RD(J*.H1=J{<>HL98;q@gsA6 vZaDVeq');
define('SECURE_AUTH_KEY',  'Hh%LGx{{Tg8[mleo8C{kxlb7!2r? uMmdkR/i#3e0U5@#a60G+Q9|^CKKLuJla=X');
define('LOGGED_IN_KEY',    '=mg]j@xlH%|q[t]StB:{-vKH,,[Ba$4vsu-/|n[1!?B2C[>aj78IgH}G@o9O*n}v');
define('NONCE_KEY',        'gOj1*sON;<HzO^Pm]5m*d6,x.V5u/%C|%*9+[2nF1HA<dWn3!/a&EQtIRI);2T$N');
define('AUTH_SALT',        'oC, yZ,7~r+J1o7<=40V]JQ&Zp3wGNNpD=irp J9Hmj!YogtOtbU?Ud-Wn$!]*4l');
define('SECURE_AUTH_SALT', '.HGi/p-1GFnV7Et[TJ{_oTNO5a_VC=}:YiPLw_$!fyMJbD-[/ywTxz,.|7a0/~mO');
define('LOGGED_IN_SALT',   'b;6>oFu(&=i<qCh/wg&>tyI%4<./vVM%;;g4:ZD3/I*&9/?:EKL||,UP9M9SHKO;');
define('NONCE_SALT',       '0HZT45W{;}wswSrr{}N8+`8D8`r-eJTglS(R5PzuvJ)G2|]Xy9imN`9uRa$AfD,m');

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
