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
 * Frontend form fields
 */
$GLOBALS['TL_FFL']['range'] = 'InputRange';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('InputRange', 'validateCommaSeparatedDigits');
