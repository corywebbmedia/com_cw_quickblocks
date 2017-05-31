<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

 // No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

JLoader::register('CwquickblocksHelper', JPATH_SITE . '/components/com_cw_quickblocks/helper.php');

/**
 * View class for Blocks.
 */
class CwquickblocksViewBlocks extends JViewLegacy
{
	/**
	 * Display the view
	 *
	 * @param   string  $tpl  Template name
	 *
	 * @return void
	 *
	 * @throws Exception
	 */
	public function display($tpl = null)
	{
		$app = JFactory::getApplication();

		$this->params            = $app->getParams('com_cw_quickblocks');
		$this->position_prefix   = $this->params->get('position_prefix');
		$this->row_count         = $this->params->get('row_count');
		$this->column_count      = $this->params->get('column_count');
		$template = JFactory::getApplication()->getTemplate(); // The name of the current template
		$this->style             = preg_replace('/^(system|' . $template . ')\-/i', '', $this->params->get('style'));
		$this->module_parameters = array('style' => $this->style);

		// Get an array of modules by position with the naming convention {position_prefix}_{row}_{column}
		$this->modules           = CwquickblocksHelper::getModules($this->position_prefix, $this->row_count, $this->column_count);

		$this->_prepareDocument();
		parent::display($tpl);
	}

	/**
	 * Prepares the document
	 *
	 * @return void
	 *
	 * @throws Exception
	 */
	protected function _prepareDocument()
	{
		$app   = JFactory::getApplication();
		$menus = $app->getMenu();
		$title = null;

		// Because the application sets a default page title,
		// we need to get it from the menu item itself
		$menu = $menus->getActive();

		if ($menu)
		{
			$this->params->def('page_heading', $this->params->get('page_title', $menu->title));
		}
		else
		{
			$this->params->def('page_heading', JText::_('COM_CW_QUICKBLOCKS_DEFAULT_PAGE_TITLE'));
		}

		$title = $this->params->get('page_title', '');

		if (empty($title))
		{
			$title = $app->get('sitename');
		}
		elseif ($app->get('sitename_pagetitles', 0) == 1)
		{
			$title = JText::sprintf('JPAGETITLE', $app->get('sitename'), $title);
		}
		elseif ($app->get('sitename_pagetitles', 0) == 2)
		{
			$title = JText::sprintf('JPAGETITLE', $title, $app->get('sitename'));
		}

		$this->document->setTitle($title);

		if ($this->params->get('menu-meta_description'))
		{
			$this->document->setDescription($this->params->get('menu-meta_description'));
		}

		if ($this->params->get('menu-meta_keywords'))
		{
			$this->document->setMetadata('keywords', $this->params->get('menu-meta_keywords'));
		}

		if ($this->params->get('robots'))
		{
			$this->document->setMetadata('robots', $this->params->get('robots'));
		}
	}

}
