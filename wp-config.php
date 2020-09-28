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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Valerka\Downloads\OSPanel\domains\bootstrap.loc\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wp_bt' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'wd`tSbaJ<m_ Q-&yTxMuvD&?*TrA%4cG^JAl!OliC`FIFoetUb?u3-&)Cqwd?&~I' );
define( 'SECURE_AUTH_KEY',  '!tkmyhKC*=R+&.yy/w`usSm4^qq}V!WEf5iRbbEF(Pm]:ZD]T,nSUm5)b^BI|8))' );
define( 'LOGGED_IN_KEY',    'pwOnU|6c=>Z#6)p#x %$kqpX:L/GzN?.dlO,#?Ov]ne=/*&CS0(ZpQc;tr?k4%m^' );
define( 'NONCE_KEY',        'Dwrxz3-F|hpXrzFBFEm-_*dQ~(TW>=0L7A <5`1L{ywU#q11$7Iu2t9b@^w<_.Tz' );
define( 'AUTH_SALT',        ';!l+7<E)k#EytA3e.CkliJCCk*{-R+71gM~iM}!0_IVP!2xC<&&tC.@67gskDz0>' );
define( 'SECURE_AUTH_SALT', 'l]70(43]LT.IyiJ,cxeoeI$x}&dH5Ys$A80P]#T;ETr*vF`x617k.*58ntza,- u' );
define( 'LOGGED_IN_SALT',   ';zdOA0/h;_b!4w19n)LU`?YlLXeAe%^o{}Nc3zHDU[J60N/~ZT9^tNk4CV1wORu1' );
define( 'NONCE_SALT',       'C+_C7%g{Xdh/ik-wpO03Ir0=^?;gi7B+YB<ymVNK=<,kc@)JIX!)ngCa10LG o#V' );

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
