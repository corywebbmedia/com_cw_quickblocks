<?php
/**
 * @copyright   Copyright (C) 2015-2016 Cory Webb Media, LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;


if(count($this->modules)):
    foreach($this->modules as $key => $row):
        $span = floor(12 / count($row));
        $last_span = 12 % count($row);
        $i = 1;
?>
    <div class="row-fluid blocks-row-<?php echo $key; ?>">
        <?php foreach($row as $column): ?>
        <?php
            if($last_span > 0 && $i == count($row)) {
                $span += $last_span;
            }
        ?>
        <div class="column span<?php echo $span; ?>">
            <?php foreach($column as $module) {
                echo JModuleHelper::renderModule($module, $this->module_parameters);
            } ?>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
    </div>
<?php endforeach;
endif;
