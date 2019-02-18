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
define('DB_NAME', 'sehhhhhl_2019');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'sehhhhhl_2019');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '5,*FAKB+h(V8');

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
define('AUTH_KEY',         'TUNH&/Li0Hu:8kMm2Q^wO}5q9pk5J2:#:WGni`~Azl~K5nk6+3_BjVg9?b,~n)I.');
define('SECURE_AUTH_KEY',  'O9SMJqe|z}xDFxb61P$T1b>t0MujLf,&bQ!omwNcUC=;V>cJ.HByl#UTg?83a*Fl');
define('LOGGED_IN_KEY',    'x:LoM}P{6h_lzG^G){0aV3M3,,vpd;8O&I[(mef.Z6ZXNaZlxrB;2-;=Lt% pCL9');
define('NONCE_KEY',        'T@+(FoMf.Qkh r%S;{EP:S1_Z0h/#SC4,jiX9.P9#}{w:6PXl :0qTw3uTXXXmPf');
define('AUTH_SALT',        'CiwU//&8+@O:dx!E||?l,D?A[M(5TIi</i^.|N7:c7>m=`nl[,/]NyFM46ai<4^#');
define('SECURE_AUTH_SALT', 'kRQXs!ZZzd&<;o~:BbImwi1#VR$>r9bobN`}5tt3ArKd>?#&]j7I:2NuZTQFXKDA');
define('LOGGED_IN_SALT',   ' ?<5wQi5*jI0%[$DnbM<sU_?SW<_kOk7mc2/^piE@mVeq->V.+X^cx>aj)%t<EWS');
define('NONCE_SALT',       ']#3ey%>Ktee,kq}hWkIubj0frmOFf^1g,+wccU58@7^8UW[2pO3e$,4k.UKS,#AH');
define('WP_ALLOW_REPAIR', true);

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'seeeeh_';

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
