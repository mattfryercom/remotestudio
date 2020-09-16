<?

/**
 * Theme Metadata
 */

/**
 * The version of the theme, typically a timestamp in the format YYYYMMDDHHMMSS.
 * @var constant string
 */
define('THEME_VERSION', '20201016212740');

/**
 * The year the theme was produced, in the format YYYY.
 * @var constant string
 */
define('THEME_YEAR', '2020');

/**
 * The publicly visible name of this theme or website.
 * @var constant string
 */
define('THEME_NAME', 'Remote Studio');

/**
 * The language of the theme.
 * @var constant string
 */
define('THEME_LANGUAGE', 'en-gb');

/**
 * The character set of the theme.
 * @var constant string
 */
define('THEME_CHARSET', 'utf-8');

/**
 * The viewport settings for the theme.
 * @var constant string
 */
define('THEME_VIEWPORT', 'width=device-width, initial-scale=1');

/**
 * The doctype definition for the theme.
 * @var constant string
 */
define('THEME_DOCTYPE', '<!doctype html>' . "\n");

/**
 * Include this theme's router.
 */
include PUBLIC_THEME . 'router.php';