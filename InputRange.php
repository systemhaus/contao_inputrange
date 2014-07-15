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
 * Class Inputrange
 *
 * Provide a input field of the "range" type with multiple settings
 */
class InputRange extends Widget
{
	
	/**
	 * Submit user input
	 * @var boolean
	 */
	protected $blnSubmitInput = true;
	
	/**
	 * Add a for attribute
	 * @var boolean
	 */
	protected $blnForAttribute = true;
	
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'form_widget_output';
	
	/**
	 * Add specific attributes
	 * @param string
	 * @param mixed
	 */
	public function __set($strKey, $varValue)
	{
		switch ($strKey)
		{
			case 'mandatory':
				if ($varValue)
				{
					$this->arrAttributes['required'] = 'required';
				}
				else
				{
					unset($this->arrAttributes['required']);
				}
				parent::__set($strKey, $varValue);
				break;
			
			default:
				parent::__set($strKey, $varValue);
				break;
		}
	}
	
	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		if ($this->strFormat != 'html5')
		{
			return '<span style="color:red">This form widget is only supported in HTML5 documents.</span>';
		}

		$strBuffer = '';
		
		$strBuffer .= sprintf('<input type="range" name="%s" id="ctrl_%s" class="range%s" min="%s" max="%s"%s value="%s"%s%s%s>',
			$this->strName,
			$this->strId,
			(strlen($this->strClass) ? ' ' . $this->strClass : ''),
			$this->minimum,
			$this->maximum,
			(strlen($this->step) ? ' step="' . $this->step . '"' : ''),
			specialchars($this->varValue),
			(strlen($this->datalist) ? ' list="dlist_' . $this->strId . '"' : ''),
			' onchange="output_' . $this->strId . '.value=value"',
			$this->getAttributes());
		
		if (strlen($this->datalist))
		{
			$strBuffer .= "\n";
			$strBuffer .= '<datalist id="dlist_' . $this->strId . '">';
			foreach (explode(',', specialchars($this->datalist)) as $item)
			{
				$strBuffer .= '<option>' . $item . '</option>';
			}
			$strBuffer .= '</datalist>';
		}
		
		return $strBuffer;
	}
	
	/**
	 * Generate an <output> field for the widget
	 * @return string
	 */
	public function generateOutput()
	{
		return  sprintf('<output id="output_%s" for="ctrl_%s">%s</output>',
			$this->strId,
			$this->strId,
			specialchars($this->varValue));
	}
	
	/**
	 * Custom RegEx validation of comma separated values
	 * @param string
	 * @param string
	 * @param \Widget
	 * @return boolean
	 */
	public function validateCommaSeparatedDigits($strRegexp, $varValue, \Widget $objWidget)
	{
		if ($strRegexp == 'commaseparateddigits')
		{
			if (!preg_match('/^(([0-9])*.)?[0-9]+(,( )*(([0-9])*.)?[0-9]+)*$/', $varValue))
			{
				$objWidget->addError('Field ' . $objWidget->label . ' can only contain comma separated digits');
			}
			
			return true;
		}
		
		return false;
	}
	
}
