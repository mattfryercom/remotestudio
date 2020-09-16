<?

/**
 * Route the request.
 */

/**
 * Split the request URI string at forward slashes, explode to array, remove empty values and reindex the array.
 * @var array[string]
 */
$URI = array_values(array_filter(explode('/', $_SERVER['REQUEST_URI'])));

/**
 * Remove any unwanted URI values from the URI array.
 */
if (isset($URI[0]))
{
	foreach ($URI as $key => $value)
	{
		/**
		 * If using Codekit remove the cache string from the URI array and reindex.
		 */
		if (strstr($value, 'ckcache'))
		{
			unset($URI[$key]);
			array_values($URI);
		}
	}
}

/**
 * If no URI values are set...
 */
if (!isset($URI[0]))
{
	/**
	 * ...include the public theme file.
	 */
	include PUBLIC_THEME . 'theme.php';
	exit();
}
else
{
	/**
	 * ...else include the theme according to the first value in the URI array.
	 */
	switch($URI[0])
	{
		case '':
			// fall through to default
		default:
			include PUBLIC_THEME . 'theme.php';
			exit();
	}
}