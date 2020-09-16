<?

/**
 * Set the timezone.
 */
date_default_timezone_set('Europe/London');

/**
 * Turn on all error reporting.
 */
error_reporting(E_ALL);

/**
 * Set the location of the file to log errors to.
 */
ini_set('error_log', MODELS . '.errors');

/**
 * Enable error logging.
 */
ini_set('log_errors', 'on');

/**
 * Disable displaying errors.
 */
ini_set('display_errors', 'off');

/**
 * Disable HTML tags in errors.
 */
ini_set('html_errors', 'off');

/**
 * Remove the Powered-by PHP header from the HTTP header.
 */
header('X-Powered-By: Remote Studio');