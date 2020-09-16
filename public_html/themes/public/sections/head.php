<?= THEME_DOCTYPE ?>
<!--
**************************************************
|
| Remote Studio
|
**************************************************
|
| Copyright: © Remote <?= THEME_YEAR ?><?= (DATE('Y') !== THEME_YEAR) ? ' - ' . DATE('Y') : '' ?><?= "\n" ?>
|
| Website: https://remotestudio.org
|
| Email: email@remotestudio.org
|
| Version: <?= THEME_VERSION ?><?= "\n" ?>
|
**************************************************
-->
<? ob_start('minify'); ?>
<html lang="<?= !empty(THEME_LANGUAGE) ? THEME_LANGUAGE : 'en-gb' ?>">
	<head>
		<title><?= !empty(THEME_TITLE) ? THEME_TITLE . ' | ' : '' ?><?= THEME_NAME ?></title>
		<meta name="description" content="<?= THEME_DESCRIPTION ?>">
		<meta name="viewport" content="<?= THEME_VIEWPORT ?>">
		<link rel="stylesheet" href="<?= REL_PUBLIC_THEME ?>styles-min.css?v=<?= THEME_VERSION ?>">
	</head>
	<body<?= defined('THEME_CLASS') ? ' class="default ' . THEME_CLASS . '"' : ' class="default"' ?>>
