<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

/**
 * Class CwquickblocksController
 */
class CwquickblocksController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   mixed    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController   This object to support chaining.
	 *
	 * @since    1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		$view = JFactory::getApplication()->input->getCmd('view', 'blocks');
		JFactory::getApplication()->input->set('view', $view);

		// Layout override set by user.
		$layout = JFactory::getApplication()->getParams('com_cw_quickblocks')->get('layout');
		if($layout)
		{
			JFactory::getApplication()->input->set('layout', $layout);
		}

		parent::display($cachable, $urlparams);

		return $this;
	}
}
