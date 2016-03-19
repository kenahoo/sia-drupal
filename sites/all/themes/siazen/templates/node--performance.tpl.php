<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>


<div class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php
    $venue = $content['field_venue']['#items'][0]['entity'];
    ?>
    
    <?= render($content['field_date']) ?>
    at
    <?= $venue->display_name ?>
    <a href="https://google.com/maps/place/<?= $venue->geo_code_1 ?>,<?= $venue->geo_code_2 ?>">[map]</a>
    
</div>
