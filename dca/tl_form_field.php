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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['range'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,minimum,maximum,step,datalist;{expert_legend:hide},value,class,accesskey,tabindex;{submit_legend},addSubmit';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['minimum'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['minimum'],
	'inputType'               => 'text',
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['maximum'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['maximum'],
	'inputType'               => 'text',
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['step'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['step'],
	'inputType'               => 'text',
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'                    => array('rgxp'=>'digit', 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_form_field']['fields']['datalist'] = array(
	'label'                   => &$GLOBALS['TL_LANG']['tl_form_field']['datalist'],
	'inputType'               => 'text',
	'sql'                     => "varchar(255) NOT NULL default ''",
	'eval'                    => array('/$[0-9,]+^/'=>'alnum', 'tl_class'=>'w50')
);
