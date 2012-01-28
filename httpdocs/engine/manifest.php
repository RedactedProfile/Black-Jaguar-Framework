<?php
/**
 * Include Manifest
 */

$includes = array(
		"config/config",
		"config/autoload",
		"engine/plugins/uri",
		"engine/plugins/load",
		"engine/plugins/database",
		"engine/assistants/html",
		"engine/assistants/input",
		"engine/assistants/system"
);


// Loads the includes
foreach($includes as $inc) { include($_SERVER['DOCUMENT_ROOT']."/".$inc.".php"); }