<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'geracao05');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'geracao005_add1');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bancopavan123');

/** nome do host do MySQL */
define('DB_HOST', 'mysql.geracao.cc');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd(Agv`Y>o~7(} Vn|{eaYqW%U41*>g-vV7j)_I#@y9:vOef|KPc3lah3|NpM+ps)');
define('SECURE_AUTH_KEY',  '(2Fj4+E?<#f5NDnzyNcue>#&^&=T$BwVZ`!o^&+^M]dthX=bnv^#|>S5{Dh.P5NG');
define('LOGGED_IN_KEY',    'm*nU)H3?X=Q{F-x|J49rwXL]U=H48DJP-eiGfDK41S&Vp3X%{oYelKvZ~RM(^DPS');
define('NONCE_KEY',        'MHWf&~NQ+yzDOh_Xys#i:|/<Z,4@_{27{Y5P#!T`5*m)|tv-QFTkv03A$RB3;R^u');
define('AUTH_SALT',        '@lU91!YTf+k+mW_ys?ZYwn6PMj|1Pj0h+s6)~hOdFndDEuFFI~YASAIA}P2_OGsg');
define('SECURE_AUTH_SALT', 'MYrCxaux{pb1N7US<Ak9TCR7<F6D-JabqXDX*|=(@nhW* }pt!84rva`=5~EGN|,');
define('LOGGED_IN_SALT',   '`,N=Z|2+Zo8jH7vv-+e*vYFa2FU^QW?TO*;i93F-4+e#Hn=D0q)l_)fhPU]gc~Oq');
define('NONCE_SALT',       '30g%nkq_i+@3~@MK-ZCc]U}|f SDf3#kA^!a0-[oaW9]BSH]--tk_2I%@Cov051e');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
