<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_a411601a0c757a1');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'bcefa2316b11cb');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'e6abce20');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         'F4=57<m:CS4<D-{;p%Qda<-Iy?=q]A0A8l-LT;fg{Go c1ZHwRtj(hoF6 F?V+GI');
define('SECURE_AUTH_KEY',  'MvqFi%;mBFLw(PI6a&V=&q/[`,KK=rWB`cC6uCIKv,}%M1u}f}O&jL]uT}S+KrP>');
define('LOGGED_IN_KEY',    '`m%4.yWOIw&w$<CdEQ}82+{>%LQ3J0=QLfGzjlVyW0=#-zVspmaW#-}?r*3m_C}=');
define('NONCE_KEY',        '[+nn*ABQd%(kYo8luS|G37aK97Ix*d!q-{pZi%lwP&^FODfv>5PJ|!rkd&K{0ZqL');
define('AUTH_SALT',        'Hy!3390cShxl,./~qT36S9_5uH)FFVk&]%`hx5vw+u.<<XM5nglg)u)^5ULsBm<q');
define('SECURE_AUTH_SALT', 'yB-vuN#e+KO/z_E1ZcR@i{EOAJ2|: )fWhL-aN82GuC5&H>1eX}%>]_l7QL,[O+$');
define('LOGGED_IN_SALT',   'vLn8|ofJ$N_ADAu3l=(9`|mny*Hl~-CU3SVwkgoi<)|{SZVMg&5x#Y6blxxkXE>*');
define('NONCE_SALT',       '5 2XB(qjdkR]wt{J+ii+=M}M=,s<$687wf`VAg8DA1`0;0hZ!QeGDeVTt+&xZ &$');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');