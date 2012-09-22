<?php
function smarty_function_xoopsdhtmltarea($params, &$smarty)
{

	if (defined('LEGACY_BASE_VERSION') && version_compare(LEGACY_BASE_VERSION, '2.2', '>=')) {

		/**
		 *
		 * @package Legacy
		 * @version $Id: function.xoops_dhtmltarea.php,v 1.3 2010/02/22 15:12:36 kilica Exp $
		 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
		 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
		 *
		 * [ToDo]
		 * 1) We may have to move this file to other module with following namespace or
		 *	  package.
		 * 2) Some users and developers want free elements at $params. For example,
		 *	  $params['script']... This function have not impletented that yet. At
		 *	  implementing, we will have to define the rule about sanitizing.
		 * 3) Users can't set class element to this function, because XoopsForm is
		 *	  used. For format xoops_xxxx functions, we may change XoopsForm class
		 *	  group.
		 * 
		 */

		/*
		 * Smarty plugin
		 * -------------------------------------------------------------
		 * Type:	 function
		 * Name:	 xoops_dhtmltarea
		 * Version:  1.0
		 * Date:	 Jun 6, 2004
		 * Author:	 minahito
		 * Purpose:  cycle through given values
		 * Input:	 name = form 'name'.
		 *			 value = preset value.
		 *			 id = form 'id'. If it's empty, ID is defined automatically by prefix & name.
		 *			 cols = amount of cols. (default 50)
		 *			 rows = amount of rows. (default 5)
		 *			 editor = textarea editor type (default bbcode)
		 * 
		 * Examples: {xoops_dhtmltarea name=message cols=40 rows=6 value=$message}
		 * -------------------------------------------------------------
		 */

		define ("XOOPS_DHTMLTAREA_DEFID_PREFIX", "legacy_xoopsform_");
		define ("XOOPS_DHTMLTAREA_DEFAULT_COLS", "50");
		define ("XOOPS_DHTMLTAREA_DEFAULT_ROWS", "5");

		if (!XC_CLASS_EXISTS('xoopsformelement')) {
			require_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
		}
		$form = null;

		$root =& XCube_Root::getSingleton();
		$textFilter =& $root->getTextFilter();
		if (isset($params['name'])) {
			//
			// Fetch major elements from $params.
			//
			$params['name'] = trim($params['name']);
			$params['class'] = isset($params['class']) ? trim($params['class']) : null;
			$params['cols'] = isset($params['cols']) ? intval($params['cols']) : XOOPS_DHTMLTAREA_DEFAULT_COLS;
			$params['rows'] = isset($params['rows']) ? intval($params['rows']) : XOOPS_DHTMLTAREA_DEFAULT_ROWS;
			$params['value'] = isset($params['value']) ? $params['value'] : null;
			$params['id'] = isset($params['id']) ? trim($params['id']) : XOOPS_DHTMLTAREA_DEFID_PREFIX . $params['name'];
		
			//
			// Build the object for output.
			//
			$html = "";
			switch($params['editor']){
			case 'html':
				XCube_DelegateUtils::call("Site.TextareaEditor.HTML.Show", new XCube_Ref($html), $params);
				break;
			
			case 'none':
				XCube_DelegateUtils::call("Site.TextareaEditor.None.Show", new XCube_Ref($html), $params);
				break;
			case 'bbcode':
			default:
				XCube_DelegateUtils::call("Site.TextareaEditor.BBCode.Show", new XCube_Ref($html), $params);
				break;
			}
			print $html;
		
			/*
			$form =new XoopsFormDhtmlTextArea($name, $name, $value, $rows, $cols);
			$form->setId($id);
			if ($class != null) {
				$form->setClass($class);
			}
			
			print $form->render();
			*/
		}

	} else if (defined('XOOPS_CUBE_LEGACY')) {

		/**
		 *
		 * @package Legacy
		 * @version $Id: function.xoops_dhtmltarea.php,v 1.3 2008/09/25 15:12:36 kilica Exp $
		 * @copyright Copyright 2005-2007 XOOPS Cube Project  <http://xoopscube.sourceforge.net/> 
		 * @license http://xoopscube.sourceforge.net/license/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
		 *
		 * [ToDo]
		 * 1) We may have to move this file to other module with following namespace or
		 *    package.
		 * 2) Some users and developers want free elements at $params. For example,
		 *    $params['script']... This function have not impletented that yet. At
		 *    implementing, we will have to define the rule about sanitizing.
		 * 3) Users can't set class element to this function, because XoopsForm is
		 *    used. For format xoops_xxxx functions, we may change XoopsForm class
		 *    group.
		 * 
		 */

		/*
		 * Smarty plugin
		 * -------------------------------------------------------------
		 * Type:     function
		 * Name:     xoops_dhtmltarea
		 * Version:  1.0
		 * Date:     Jun 6, 2004
		 * Author:   minahito
		 * Purpose:  cycle through given values
		 * Input:    name = form 'name'.
		 *           value = preset value.
		 *           id = form 'id'. If it's empty, ID is defined automatically by prefix & name.
		 *           cols = amount of cols. (default 50)
		 *           rows = amount of rows. (default 5)
		 * 
		 * Examples: {xoopsdhtmltarea name=message cols=40 rows=6 value=$message}
		 * -------------------------------------------------------------
		 */

		define ("XOOPS_DHTMLTAREA_DEFID_PREFIX", "legacy_xoopsform_");
		define ("XOOPS_DHTMLTAREA_DEFAULT_COLS", "50");
		define ("XOOPS_DHTMLTAREA_DEFAULT_ROWS", "5");

		if (!XC_CLASS_EXISTS('xoopsformelement')) {
			require_once XOOPS_ROOT_PATH . "/class/xoopsformloader.php";
		}
		$form = null;

	    $root =& XCube_Root::getSingleton();
	    $textFilter =& $root->getTextFilter();
		if (isset($params['name'])) {
			//
			// Fetch major elements from $params.
			//
			$name = trim($params['name']);
			$class = isset($params['class']) ? trim($params['class']) : null;
			$cols = isset($params['cols']) ? intval($params['cols']) : XOOPS_DHTMLTAREA_DEFAULT_COLS;
			$rows = isset($params['rows']) ? intval($params['rows']) : XOOPS_DHTMLTAREA_DEFAULT_ROWS;
			$value = isset($params['value']) ? $params['value'] : null;
			$id = isset($params['id']) ? trim($params['id']) : XOOPS_DHTMLTAREA_DEFID_PREFIX . $name;

			//
			// Build the object for output.
			//
			$form =& new XoopsFormDhtmlTextArea($name, $name, $value, $rows, $cols);
			$form->setId($id);
			if ($class != null) {
				$form->setClass($class);
			}
			
			print $form->render();
		}

	} else {

		/*
		 * Smarty plugin
		 * -------------------------------------------------------------
		 * Type:     function
		 * Name:     xoopsdhtmltarea
		 * Version:  1.0
		 * Date:     Jun 6, 2004  (modified 2006-11-10)
		 * Author:   minahito <sunday_lab@pleple.com> - modified by GIJOE
		 * Purpose:  cycle through given values
		 * Input:    name = name of form 'name'
		 *           values = preset value
		 *           cols = default 50
		 *           rows = default 5
		 *           pre_style = default '' (you can specify pre_style="display:none;")
		 *           post_sytle = default '' (you can specify post_style="display:none;")
		 * 
		 * Examples: {xoopsdhtmltarea name=message cols=40 rows=6 value=$message}
		 * -------------------------------------------------------------
		 */

		if (!class_exists('xoopsformelement')) {
			require_once XOOPS_ROOT_PATH."/class/xoopsformloader.php";
		}
		$form=null;

		if( ! empty( $params['name'] ) ) {
			$name = trim($params['name']);
			$rows = isset($params['rows']) ? intval($params['rows']) : 5;
			$cols = isset($params['cols']) ? intval($params['cols']) : 50;
			$value = isset($params['value']) ? $params['value'] : "";
			$form = new XoopsFormDhtmlTextArea($name,$name,$value,$rows,$cols);
			$rendered = $form->render();
			print '<div id="'.$name.'_bbcode_buttons_pre" style="'.@$params['pre_style'].'">'.str_replace( array( '<textarea' , '</textarea><br />' ) , array( '</div><textarea' , '</textarea><div id="'.$name.'_bbcode_buttons_post" style="'.@$params['post_style'].'">' ) , $rendered ) . '</div>' ;
		}

	/* vim: set expandtab: */

	}
}
?>