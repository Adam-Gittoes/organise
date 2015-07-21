<?php

# Load settings from configuration file
$settings = parse_ini_file("_conf/conf.ini");

# Load PHP modules
include("_mods/theme.php");

# Set variables from configuration
$website_name = $settings['SITE_NAME'];
$author = $settings['SITE_AUTH'];
$theme_def = $settings['THEME_DEF'];
$theme_dir = $settings['THEME_DIR'];
$homepage = $settings['HOMEPAGE'];	
$page_default = $settings['PAGE_DEF'];
$page_extension = $settings['PAGE_EXT'];

# Set variables
$theme_def = "$theme_dir/$theme_def";
$theme = get_theme($theme_def);

?>
<!doctype html>
<html lang='en'>
<head>
	<meta charest='UTF-8' />
	<meta http-equiv='x-ua-compatible' content='ie=edge' />

	<title><?php echo $website_name; ?></title>
	<meta name='description' content='Manage your projects with organise; the only tool you need to deliver quality ontime.' />
	<meta name='author' content='Adam Gittoes' />
	<meta name='viewport' content='width=device-width, initiak-scale=1' />

	<link rel='apple-touch-icon' href='_img/icons/apple-touch-icon.png' />

	<link rel='stylesheet' href='_css/normalize.css' />
	<link rel='stylesheet' href='<?php echo get_stylesheet("main"); ?>' />
	<link rel='stylesheet' href='<?php echo get_stylesheet("responsive"); ?>' />
</head>
<body>
	<!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<?php include(get_mod("layout")); ?>
</body>
</html>