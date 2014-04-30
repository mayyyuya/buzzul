<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', '');

/** MySQL データベースのユーザー名 */
define('DB_USER', '');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', '');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g_)&s-:-6I|Z#jzT,HRB- tBT{1j*{z<q*i=t~G+km;G|`Vm]7j|8s>XPAsOrK?>');
define('SECURE_AUTH_KEY',  '+a4zEV;X{aL/;C-PQe|/J3 6HxJPUCf#o:Dz9hEHU.P*SCsV5LK#DC{Pt*Nz|0R=');
define('LOGGED_IN_KEY',    '/%[^08F5`J,B:hX|OJHqi.5NZVUDB4(K])^@_&fz1Nz-N?`qN$TB3-=A`]cgzm%+');
define('NONCE_KEY',        '|lTu{y8[X@Ix#@0EcB8>|tLrXb:I=n>+NAQPp0!+7KG<S0t$r6QTI/dGD-vtVe*P');
define('AUTH_SALT',        'XD(1CU~bE.}g#8Q!a>Wi*{.P1jbU;f_`[R`vVSdqEPO>@B>{=x{m(1%>/YXNt|xZ');
define('SECURE_AUTH_SALT', '*i:SF44l+Z%6n,Wt1sqN::Ndp(3nt>bxe wS.X7Tc|3rp/%JGZM|Zg{85,;kI^&j');
define('LOGGED_IN_SALT',   'bNcn?F`Ok2Y,69PA55>c43Bm|0C9t%awvaXf&O@znEw8QdW][EF14:bR8+(UBxH)');
define('NONCE_SALT',       'T,=-Iaes}Y+@*hn.aR2!-BNhj2NB9l|3Q|^ ~,O7R#Dd8)kpW+ApWpV5!hBq3+9!');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = '';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');
