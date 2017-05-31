<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

$app = JFactory::getApplication();

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_cw_quickblocks'))
{
	$app->enqueueMessage(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('Cwquickblocks');
$controller->execute($app->input->get('task'));
$controller->redirect();
