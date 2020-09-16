<?

/**
 * Route the public resource or page request.
 */

/**
 * Include the relevant page or resource based on the URI values.
 */
if (!isset($URI[0]))
{
	/**
	 * Set the meta title of the page or resource.
	 * @var constant string
	 */
	define('THEME_TITLE', 'The Minimal CMS and Framework for Web Developers');

	/**
	 * Set the meta description of the page or resource.
	 * @var constant string
	 */
	define('THEME_DESCRIPTION', 'The Minimal CMS and Framework for Web Developers.');

	/**
	 * Set the class of the body tag for this page or resource.
	 * @var constant string
	 */
	define('THEME_CLASS', 'home');

	/**
	 * Include the home page.
	 */
	include PUBLIC_THEME . 'pages/home.php';
	exit();
}
else
{
	switch($URI[0])
	{
		case '':
			// fall through to default
		default:
			/**
			 * Set the meta title of the page or resource.
			 * @var constant string
			 */
			define('THEME_TITLE', 'The Minimal CMS and Framework for Web Developers');

			/**
			 * Set the meta description of the page or resource.
			 * @var constant string
			 */
			define('THEME_DESCRIPTION', 'The Minimal CMS and Framework for Web Developers');

			/**
			 * Set the class of the body tag for this page or resource.
			 * @var constant string
			 */
			define('THEME_CLASS', 'home');

			/**
			 * Include the home page.
			 */
			include PUBLIC_THEME . 'pages/home.php';
			exit();
	}
}
