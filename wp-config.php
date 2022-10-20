<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'igottabonner_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[1}76`Wg.NwRr*>,^/Z)_k/D-k9#$.;1 jltj!)!e<Z6,JD5#wzk7IsPBVyx29_H' );
define( 'SECURE_AUTH_KEY',  'YYIQWatbN2!fVK?>h8+a3Lzs3Yl#S~_3]1_]^I;pOUo]2s&$y_Bf`pN?^!Exf`fS' );
define( 'LOGGED_IN_KEY',    'cQ@u%6+[;J:>@QfCpiqcG1s#+W:De $vI1:%!O,igPh/_lS)vQ{D`Yn=aTWZbq>$' );
define( 'NONCE_KEY',        'KJ}$Rbhb>U(OJ}V3_:}-l7$4q/X:/Vq0b.n54M&Uv;&{6G6`1t6[]+LT{_sR.4ic' );
define( 'AUTH_SALT',        'VB*GXC43POi?EASj%+{U!gR[HKx<PlEb~s`Wn2Qig<OFayKzwhUUq,0!eORdMx1W' );
define( 'SECURE_AUTH_SALT', '-thnm]9>Bk~:Bg.8L+aWyAPdHT$#nruzJaQ=-Is9fu69&1Ke !H(;rA,J$m% ,`V' );
define( 'LOGGED_IN_SALT',   'w$.Npr&qtC|J*l=UJz}<scL!_Stf7NbNc>Ni|pE0X/K,RBJ!O$a|aUT,Ujn~;9Td' );
define( 'NONCE_SALT',       '%:@J3KHR5=$*=-xU#Hc}y>mI8n,| HUKc6smZlg2MA?o~P4g7XF]*zkzS*]x{4ue' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
