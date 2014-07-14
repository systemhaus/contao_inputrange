<?php

/**
 * inputrange extension for Contao Open Source CMS
 * 
 * Copyright © 2014 ETES GmbH
 * 
 * @package inputrange
 * @author  Sebastian Leitz <sebastian.leitz@etes.de>
 * @license LGPLv3
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'InputRange' => 'system/modules/inputrange/InputRange.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'form_widget_output' => 'system/modules/inputrange/templates',
));
