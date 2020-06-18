<?php
/**
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 */
?>

<!-- ADAPTIVE WRAPPER -->
<div class="spnet_adaptive">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <?php if (!empty($content['sidebar'])) : ?>
      <?php print $content['sidebar']; ?> 
    <?php endif; ?>
  </div>


  <!-- CONTENT -->
  <div class="content" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>

    <?php if (!empty($content['row1'])) : ?>
    <div class="row row1">
      <?php print $content['row1']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row2'])) : ?>
    <div class="row row2">
      <?php print $content['row2']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row3'])) : ?>
    <div class="row row3">
      <?php print $content['row3']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row4'])) : ?>
    <div class="row row4">
      <?php print $content['row4']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row5'])) : ?>
    <div class="row row5">
      <?php print $content['row5']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row6'])) : ?>
    <div class="row row6">
      <?php print $content['row6']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['row7'])) : ?>
    <div class="row row7">
      <?php print $content['row7']; ?>
    </div>
    <?php endif; ?>

  </div>
</div>
