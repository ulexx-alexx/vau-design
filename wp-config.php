<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'vau-design' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '192.168.1.68' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$Lb.Y)ge+1h,nm)xC)<e/#v2@:Q#y~co5MACO^[iI+sVIuC(ZvwlzJ{OcPflXp4D' );
define( 'SECURE_AUTH_KEY',  '@uf*N@pT{m+H#v_p4b3jR+RqBzUu]M[$4^,fwjT77*y.{vijsKd]bC=nX6)VE/_?' );
define( 'LOGGED_IN_KEY',    'RQ|_2_1CKU$Dif3%pI3*(josF6Z Ww1j1eM,b{ygUVQ$)v*yt3U c<DG6V8]Q&l2' );
define( 'NONCE_KEY',        'MnAIS{6cl+_%xh,&skr(<Y]gqiFHe3%YmS:pX$R1{+ E8V 9z}P(p.lJ+oT=I|@3' );
define( 'AUTH_SALT',        'IB-JI+VZDoM&i{(YCxTb=yGx,.uAQ9] Fcu~.ij0Wec!M)G%,#uRU@C&69tsd(>$' );
define( 'SECURE_AUTH_SALT', 'ESPmQyf[?$K$3yV)Xy&+)*&cwXz034%|[tiS2<ZlsTC*#k+T8{k]9#nhvXj}@OQN' );
define( 'LOGGED_IN_SALT',   '?>U!|Yb~%w=|w >.j>%Ru-$|xVB?Zy&]}2v:2tS[*t`]u@&$-W[cHH/Dm0%j#|9k' );
define( 'NONCE_SALT',       '*F7s.2,o=S)y.S*E0i`%vH 8:1[Mh6qf^eXhmQ`-r/7W[_Y`KaFMDJV[<>B=G*S(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
