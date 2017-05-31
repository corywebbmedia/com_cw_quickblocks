<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

 // No direct access
defined('_JEXEC') or die;

/**
 * Helper class for CW Quick Blocks
 */
abstract class CwquickblocksHelper
{

    /**
     * Get an array of modules by position with the naming convention {prefix}_{row}_{column}
     *
     * @param   string  $prefix        The prefix to use for module position names
     * @param   integer $row_count     The number of rows of module positions to render
     * @param   integer $column_count  The number of columns of module positions to render
     *
     * @return  array   Array of modules keyed by position name
     */
    public static function getModules($prefix, $row_count, $column_count)
    {

        // Initialize the array of modules
        $modules = array();

        // Make sure there is a prefix
        $prefix = trim($prefix) ? trim($prefix) : 'blocks';

        // Make sure that there is at least 1 row and 1 column
        $row_count = is_numeric($row_count) && $row_count > 0 ? $row_count : 1;
        $column_count = is_numeric($column_count) && $column_count > 0 ? $column_count : 1;

        for($r=1; $r<=$row_count; $r++)
        {
            for($c=1; $c<=$column_count; $c++)
            {
                // Set the position name
                $position = $prefix . '_' . $r . '_' . $c;

                // Get the modules in $position
                $position_modules = JModuleHelper::getModules($position);

                // If there are modules in $position...
                if(count($position_modules))
                {
                    // ...add those modules to the $modules array
                    $modules[$r][$position] = $position_modules;
                }
            }
        }

        // Return the array of modules to be rendered
        return $modules;

    }

}