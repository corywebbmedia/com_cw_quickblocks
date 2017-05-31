<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Execute the task.
$controller = JControllerLegacy::getInstance('Cwquickblocks');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
