<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   translation_fields 
 * @author    Daniel Kiesel 
 * @license   LGPL 
 * @copyright Daniel Kiesel 2013 
 */


/**
 * Namespace
 */
namespace TranslationFields;

/**
 * Class PageModel 
 *
 * @copyright  Daniel Kiesel 2013 
 * @author     Daniel Kiesel 
 * @package    translation_fields
 */
class PageModel extends \Contao\PageModel
{
	public static function findRootPages(array $arrOptions=array())
	{
		$t = static::$strTable;
		$arrColumns = array("$t.type='root'");

		if (!isset($arrOptions['order']))
		{
			$arrOptions['order'] = "$t.fallback DESC, $t.sorting ASC";
		}

		return static::findBy($arrColumns, $intPid, $arrOptions);
	}
}
