<?

/**
 * Minify HTML Output
 * @param string
 * @return string
 */
function minify($output)
{
    $search = array
    (
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s',
        '/<!--(.|\s)*?-->/'
    );
    $replace = array
    (
        '>',
        '<',
        '\\1',
        ''
    );
    $output = preg_replace($search, $replace, $output);
    return $output;
}