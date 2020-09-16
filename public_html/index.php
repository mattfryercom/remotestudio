<?

/**
 * Remote Studio MFE (Minimal Frontend Edition)
 *
 * This is the most basic version of Remote Studio.
 * It is intended for anyone wanting to build a website with PHP, HTML, SCSS/CSS and Javascript.
 * It is a well-structured starting point for Frontend Web Development.
 * There is no CMS, admin section or backend.
 *
 * Features:
 *
 * - Friendly URLs
 * - Request Funneling
 * - SSL (Secure Sockets Layer / https) Support
 * - HTML Minification
 * - Ready for (S)CSS and Javascript Minification
 * - PHP Error Reporting to a File
 * - Well-structured demo Theme
 * - Caching Strategy
 * - Cache-breaking Strategy
 *
 * @author Remote <email@teamremote.uk>
 */

/**
 * This is the entry point for most requests to the application.
 * @see /public/.htaccess for more information.
 */

/**
 * Include the main controller from the non-publicly-accessible 'private' directory (above the servers document root).
 */
include '../private/controllers/main.php';