<?php
/**
 * @file
 * Template for Panopoly bryant Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display bryant-flipped clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  
  <section class='section'>
    <div class='container'>
      <div class="bryant-flipped-container bryant-flipped-content-container clearfix row-fluid">
        <div class="bryant-flipped-content bryant-flipped-content-region panel-panel span9">
          <div class="bryant-flipped-content-inner bryant-flipped-content-region-inner panel-panel-inner">
            <?php print $content['contentmain']; ?>
          </div>
        </div>
        <div class="bryant-flipped-sidebar bryant-flipped-content-region panel-panel span3">
          <div class="bryant-flipped-sidebar-inner bryant-flipped-content-region-inner panel-panel-inner">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
      
</div><!-- /.bryant-flipped -->
