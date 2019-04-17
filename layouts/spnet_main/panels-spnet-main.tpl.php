<?php
/**
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<!-- MAIN WRAPPER -->
<div class="flex">

  <?php if (!empty($content['spnet_menu'])) : ?>
  <!-- MAIN MENU -->
  <div id="spnet_menu">
      <div class="flex flex-column flex-wrap">
          <?php print $content['spnet_menu']; ?>
      </div>
  </div>
  <?php endif; ?>

  <!-- MAIN CONTENT -->
  <div id="spnet_main" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>

    <?php if (!empty($content['spnet_mededeling'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="mededelingen">Mededelingen</h1>
        <?php print $content['spnet_mededeling']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_dashboard'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="dashboard">Dashboard</h1>
        <?php print $content['spnet_dashboard']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_agenda'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="agenda">Agenda</h1>
        <?php print $content['spnet_agenda']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_verkiezingen'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="verkiezingen">Verkiezingen</h1>
        <?php print $content['spnet_verkiezingen']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_campagnes'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="campagne">Campagnes</h1>
        <?php print $content['spnet_campagnes']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_organisatie'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="organisatie">Organisatie</h1>
        <?php print $content['spnet_organisatie']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_landelijk'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="landelijk">Landelijk</h1>
        <?php print $content['spnet_landelijk']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_afdeling'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="afdeling">Afdeling</h1>
        <?php print $content['spnet_afdeling']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_informatie'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="informatie">Informatie en Scholing</h1>
        <?php print $content['spnet_informatie']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_algemeen'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="algemeen">Algemeen</h1>
        <?php print $content['spnet_algemeen']; ?>
    </div>
    <?php endif; ?>

  </div><!-- END MAIN CONTENT -->
</div><!-- END MAIN WRAPPER -->

<!-- FOOTER -->
<div id="spnet_footer">

  <?php if (!empty($content['spnet_footer'])) : ?>
  <div class="container-fluid flex flex-row flex-wrap section">
      <?php print $content['spnet_footer']; ?>
  </div>
  <?php endif; ?>

</div>