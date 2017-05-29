<?php
//This file will load the program

define("INCLUDES_DIR",__DIR__);
if (file_exists(dirname(INCLUDES_DIR) . "/config.php")):
	require_once(dirname(INCLUDES_DIR) . "/config.php");
else:
	echo "<h1>Doesn't look like there is a config.php file</h1>";
endif;

require_once(INCLUDES_DIR . "/defaults.php");
