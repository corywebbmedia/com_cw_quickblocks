<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class plgInstallerCw extends JPlugin
{
    public function onInstallerBeforePackageDownload(&$url, &$headers)
    {
        $uri    = JUri::getInstance($url);
        $parts  = explode('/', $uri->getPath());

        if (strstr('corywebbmedia.com', $uri->getHost())) {

            // No need for download ID for CW Whatever, CW So Meta, or CW Installer
            if(strstr('cw-whatever', $url) || strstr('cw-so-meta', $url) || strstr('cw-installer', $url)) {
                return;
            }

            $dlid = $this->params->get('dlid', '');
            
            // Load language
            JFactory::getLanguage()->load('plg_installer_cw');
            
            // No download ID
            if (!strlen($dlid)) {
                JFactory::getApplication()->enqueueMessage(JText::_('PLG_INSTALLER_CW_MISSING_DLID'), 'warning');
                return;
            }

            // Compute the update hash          
            $uri->setVar('dlid', $dlid);
            $url = $uri->toString();
        }
    }
}
