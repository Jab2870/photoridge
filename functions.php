<?php
/**
 * Gets the root directory path
 *
 * Normally usage will not include the trailing slash although with the string "/" as after parameter, it will
 *
 * @param	$after	string	string to append to the end
 * @return			string	The path with the after parameter appended
 */
function get_root_dir($after){
	return ROOT_DIR . $after;
}
/**
 * Gets the includes directory path
 *
 * Normally usage will not include the trailing slash although with the string "/" as after parameter, it will
 *
 * @param	$after	string	string to append to the end
 * @return			string	The path with the after parameter appended
 */
function get_includes_dir($after){
	return INCLUDES_DIR . $after;
}
/**
 * Gets the themes directory path
 *
 * Normally usage will not include the trailing slash although with the string "/" as after parameter, it will
 *
 * @param	$after	string	string to append to the end
 * @return			string	The path with the after parameter appended
 */
function get_themes_dir($after){
	return THEMES_DIR . $after;
}
/**
 * Gets the backend directory path
 *
 * Normally usage will not include the trailing slash although with the string "/" as after parameter, it will
 *
 * @param	$after	string	string to append to the end
 * @return			string	The path with the after parameter appended
 */
function get_backend_dir($after){
	return BACKEND_DIR . $after;
}
/**
 * Gets the images directory path
 *
 * Normally usage will not include the trailing slash although with the string "/" as after parameter, it will
 *
 * @param	$after	string	string to append to the end
 * @return			string	The path with the after parameter appended
 */
function get_images_dir($after){
	return IMAGES_DIR . $after;
}
