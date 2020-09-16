<?

/**
 * Absolute path to the root of the project.
 * @var constant string
 */
define('ROOT', dirname(dirname(dirname(__FILE__))) . '/');

/**
 * Absolute path to the private directory.
 * @var constant string
 */
define('PRIVATE_ROOT', ROOT . 'private/');

/**
 * Absolute path to the public directory (document root).
 * @var constant string
 */
define('PUBLIC_ROOT', ROOT . 'public_html/');

/**
 * Absolute path to the controllers directory.
 * @var constant string
 */
define('CONTROLLERS', PRIVATE_ROOT . 'controllers/');

/**
 * Absolute path to the models directory.
 * @var constant string
 */
define('MODELS', PRIVATE_ROOT . 'models/');

/**
 * Absolute path to the assets directory.
 * @var constant string
 */
define('ASSETS', PUBLIC_ROOT . 'assets/');

/**
 * Absolute path to the themes directory.
 * @var constant string
 */
define('THEMES', PUBLIC_ROOT . 'themes/');

/**
 * Absolute path to the public theme directory.
 * @var constant string
 */
define('PUBLIC_THEME', THEMES . 'public/');

/**
 * Relative path to the public directory (document root).
 * @var constant string
 */
define('REL_PUBLIC_ROOT', '/');

/**
 * Relative path to the assets directory.
 * @var constant string
 */
define('REL_ASSETS', REL_PUBLIC_ROOT . 'assets/');

/**
 * Relative path to the themes directory.
 * @var constant string
 */
define('REL_THEMES', REL_PUBLIC_ROOT . 'themes/');

/**
 * Relative path to the public theme directory.
 * @var constant string
 */
define('REL_PUBLIC_THEME', REL_THEMES . 'public/');