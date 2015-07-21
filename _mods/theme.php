<?php

# Returns the path to the current theme
function get_theme($default) {

	global $theme_dir;

	# Set theme to default
	$theme = $default;

	# Check for new theme setting in url
	if(isset($_GET['theme'])) {
		$theme = $theme_dir."/".$_GET['theme'];

		# Save new user theme to cookie
		$inTwoMonths = 60 * 60 * 24 * 60 + time();
		setcookie('theme', $theme, $inTwoMonths);
	}
	elseif(isset($_COOKIE['theme'])) {
		$theme = $theme_dir."/".$_COOKIE['theme'];
	}

	# Return the theme
	return $theme;
}

# Returns the requested stylesheet
function get_stylesheet($style) {

	global $theme;
	global $theme_def;

	if(file_exists("$theme/css/$style.css")) {
		return "$theme/css/$style.css";
	}
	else {
		return "$theme_def/css/$style.css";
	}
}

# returns the requested theme module
function get_mod($module) {

	global $theme;
	global $theme_def;

	if(file_exists("$theme/$module.php")) {
		return "$theme/$module.php";
	}
	else {
		return "$theme_def/$module.php";
	}
}
?>