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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['minimum'] = array('Lower limit', 'Value of the left side end of the range slider. Only values between lower and upper limit can be selected.');
$GLOBALS['TL_LANG']['tl_form_field']['maximum'] = array('Upper limit', 'Value of the righthand end of the range slider. Only values between lower and upper limit can be selected.');
$GLOBALS['TL_LANG']['tl_form_field']['step'] = array('Gradation', 'Distance between two neighboring values that can be selected.');
$GLOBALS['TL_LANG']['tl_form_field']['datalist'] = array('Scale values', 'Comma separated list of values that will be displayed next to the range slider as indicators. This only works if the values are also valid according to the gradation.');
