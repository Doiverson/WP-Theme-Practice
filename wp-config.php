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
define('DB_NAME', 'doiverson2');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'XL1Z#2u=tph4CMM-lB&9T8y(Me@U`?R!V.?<8{l}osgk0:Cie<ZqNWfUweja#Ppa');
define('SECURE_AUTH_KEY',  'fjg*OM<$v&2js3;,zb/Y60<`>{sT86&:&W$c# sS .u;eOT6{8TSz9/A0t*iY?L`');
define('LOGGED_IN_KEY',    'N[:H}zk<w*GcSy;~V8&sxE(J#Hv@JB1FJ<|yjA-S}=lbL`$(]?LE=L*|_7.78jAR');
define('NONCE_KEY',        'L$}BOAj&i.Qp4VSwO2fymrUGOKYclT>k [T1(+tG1i>b+Y/{r.6rz=UD6%VXMp{4');
define('AUTH_SALT',        '/?@ saFuWDmdOPm4mai)R|ycC#nB/P{vC[,T`pIWExD[p9:r1*ui#Z}/6P5&XQer');
define('SECURE_AUTH_SALT', '[Db{)<?N}0*eKcjvNWuN^jK@t8E)jFH7r7]&T?(4UTUL#2A;[Shf5M^|++1NE]6k');
define('LOGGED_IN_SALT',   'EBh5Uty:tU)*OK#)4aXnddA<Gt#DiGBa)3Y{/GN*(c)KoozOed<E=oLKIDy3I4$=');
define('NONCE_SALT',       'Cqu=G#i>@kyti!dv,!RVtrx*nEcd.^--PTqi@UcSet@*ENFj#~QaM_]:4>tO,8ov');

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
