<?

/**
 * Include common path constants.
 */
include '../private/models/paths.php';

/**
 * Include PHP settings file.
 */
include MODELS . 'settings.php';

/**
 * Include Minify HTML output functionality.
 */
include MODELS . 'minify.php';

/**
 * Include the first controller.
 */
include CONTROLLERS . 'router.php';