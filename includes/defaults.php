<?php
/**
 * This file sets the default global variables.
 *
 * All of them can be overwritten in config.php, in the root folder.
 *
 * Only the database credentials are required.
 */

//This is set to true if a required variable is not set
$missing_variables = false;

########################################
##                                    ##
##          Database Variables        ##
##                                    ##
########################################
if(!defined("DBNAME")):
	$missing_variables = true;
endif;
if(!defined("DBUSER")):
	$missing_variables = true;
endif;
if(!defined("DBPASSWORD")):
	$missing_variables = true;
endif;
if(!defined("DBHOST")):
	define('DBHOST','localhost');
endif;

########################################
##                                    ##
##         Directory variables        ##
##                                    ##
########################################
if(!defined("ROOT_DIR")):
	define("ROOT_DIR",dirname(INCLUDES_DIR));
endif;

if(!defined("THEMES_DIR")):
	define("THEMES_DIR",ROOT_DIR . "/themes"));
endif;

if(!defined("BACKEND_DIR")):
	define("BACKEND_DIR",ROOT_DIR . "/backend"));
endif;

if(!defined("IMAGES_DIR")):
	define("IMAGES",ROOT_DIR . "/images"));
endif;

echo "INCLUDES_DIR: " . INCLUDES_DIR . "<br>";
echo "ROOT_DIR: " . ROOT_DIR . "<br>";

########################################
##                                    ##
##            Error Messages          ##
##                                    ##
########################################
if($missing_variables):?>
	<h1>The following are requied</h1>
	<dl>
		<?php if(!defined("DBNAME")): ?>
			<dt>DBNAME</dt>
			<dd>The database name that Photo Ridge should use</dd>
		<?php endif; ?>
		<?php if(!defined("DBUSER")): ?>
			<dt>DBUSER</dt>
			<dd>The database user to log in with</dd>
		<?php endif; ?>
		<?php if(!defined("DBPASSWORD")): ?>
			<dt>DBPASSWORD</dt>
			<dd>The database password to sign in with</dd>
		<?php endif; ?>
		</dl><?php
	exit(0);
endif;
