<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <div class="panel-panel panel-col-top">
        <div><?php print $content['top']; ?></div>
    </div>
    <div class="panel-panel panel-col-middle container">
        <div><?php print $content['middle']; ?></div>
    </div>
    <div class="panel-panel panel-col-bottom">
        <div><?php print $content['bottom']; ?></div>
    </div>
</div>
