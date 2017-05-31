<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_cw_quickblocks/assets/css/cw_quickblocks.css');
?>

<div class="row-fluid">

    <div class="span9 offset1 pull-right">

        <h2>Welcome to CW Quick Blocks!</h2>

        <p>CW Quick Blocks is a component that renders rows of module positions as the component output.</p>

        <hr />

        <h3>Instructions</h3>

        <h4>Create a CW Quick Blocks menu item</h4>

        <ol>
            <li>Open a menu in the menu manager.</li>
            <li>Click the New button to add a menu item.</li>
            <li>Set the menu item type to CW Quick Blocks > Blocks</li>
            <li>In the menu item's CW Quick Blocks tab, enter the position prefix, number of rows, and number of columns to use. The template override and module chrome are optional.</li>
            <li>Save the menu item.</li>
        </ol>

        <h4>Parameters Explained</h4>

        <ul>
            <li><strong>Template Override:</strong> A template override is an override of the default CW Quick Blocks layout file that you create within your template. This parameter will list the available template overrides. Note that if you add an override to your template called <code>default.php</code>, you don't have to select an override here because the system uses your template override automatically.</li>
            <li><strong>Position Prefix:</strong> Each module position loaded via com_cw_quickblocks will be named with the pattern {Position Prefix}_{Row}_{Column}. So, for example, if your position prefix is "blocks", then the module position in row 1, column 1 will be named <code>blocks_1_1</code>.</li>
            <li><strong>Number of Rows:</strong> Think of the module positions loaded in a com_cw_quickblocks page as the cells an Excel spreadsheet. The component will loop through the number of rows and columns set in the parameters to load the positions. This sets the number of rows to use.</li>
            <li><strong>Number of Rows:</strong> This sets the number of columns to use.</li>
            <li><strong>Module Chrome:</strong> This sets the module chrome style to use when rendering the mdoules in the com_cw_quickblocks layout.</li>
        </ul>

        <h4>Creating a Template Override</h4>

        <p>If you want to override the default layout, you have to create a template override as follows:</p>

        <ol>
            <li>Copy <code>/components/com_cw_quickblocks/views/blocks/tmpl/default.php</code> to <code>/templates/{YOUR_TEMPLATE}/html/com_cw_quickblocks/blocks/default.php</code> *</li>
            <li>Modify as needed</li>
        </ol>

        <p><em>* Note: If you want to have multiple template overrides, you can create multiple copies of <code>default.php</code>, but give it different names. Each new override will be available in as an option in the Template Override parameter in the menu item.</em></p>

    </div>

    <div class="span2 cwm-logo">
        <p><a href="http://corywebbmedia.com/joomla-extensions/cw-quick-blocks"><img src="components/com_cw_quickblocks/assets/images/logo-quick-blocks.png" alt="CW Quick Blocks" /></a></p>
        <h3><a href="http://corywebbmedia.com/joomla-extensions/cw-quick-blocks">CW Quick Blocks</a></h3>
    </div>

</div>

<hr />

<div class="cwm-logo">
    <p><a href="http://corywebbmedia.com"><img src="components/com_cw_quickblocks/assets/images/logo_yellow_square.jpg" alt="Cory Webb Media" /></a></p>

    <p>Copyright &copy; 2015, <a href="http://corywebbmedia.com">Cory Webb Media, LLC</a></p>
</div>