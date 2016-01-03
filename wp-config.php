<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'istanbultheme');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'mysql');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*M!T+/Tv0AJ8x`-+x.<wVZ*E`RP:lv^.v(5<)o.ZnVaQHvJhs>+!h=yjG8JWCbYp');
define('SECURE_AUTH_KEY',  '|,Xk8/r/F &|B_H||(P=9Y|j6B)J[5u[3-PDI[Il;rJiJ!TQoy>y|R{sa<Pql#h|');
define('LOGGED_IN_KEY',    'U+7&j;ZQP(d<CH-,xl`.Oe{d b|Y_-rrs6)+/>-/DAQLf=a)H]^bOJ+g[gOw|S9X');
define('NONCE_KEY',        '/I#-X $y00s59[m|{-p9qjFsGURK}zE1>A rS8a{x&DeJ.(FQA+:MxFocy2O<x`@');
define('AUTH_SALT',        'z[Ii:4Gl!Aqkz(%,HN]o?>y=brT}a<zJr0*8Uoh?q2E+S_z>@uHy<:(P=V&VQ>~j');
define('SECURE_AUTH_SALT', 'Fzu;ef.a+p.%.9S[ow8=Uzz[|HF?d`tG |)g%=69}.TXIBQclMx-tx_uinNDdcY[');
define('LOGGED_IN_SALT',   'suscvp|v?qCrJZ&+jLxHB[+>Q|Sbi%}EWgz<6*5pw,Cf>jh/NwQl9)PJ+}szgK>w');
define('NONCE_SALT',       '3czuoEot% jdG=hQUU a|M(AC-fdY=L&$L{GH>m27{N//f:J;WZRPHs+DR)kRJan');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
