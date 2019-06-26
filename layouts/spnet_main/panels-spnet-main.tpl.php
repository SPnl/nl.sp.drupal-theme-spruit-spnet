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
<div id="spnet_main" class="flex justify-content-left">


  <!-- SIDEBAR -->
  <div id="spnet_sidebar">
    <div id="spnet_menu">
      <!-- QUICK MENU -->
      <div id="spnet_quick-menu">
        <ul>
          <?php if (!empty($content['spnet_mededeling'])) : ?>
          <li><a class="js_scrolltolink" name="mededelingen">Mededelingen</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_landelijk'])) : ?>
          <li><a class="js_scrolltolink" name="landelijk">Landelijk</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_dashboard'])) : ?>
          <li><a class="js_scrolltolink" name="dashboard">Dashboard</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_mijnsp'])) : ?>
          <li><a class="js_scrolltolink" name="mijnsp">Mijn SP</a></li>
          <?php endif; ?>

          <?php if (!empty($content['spnet_agenda'])) : ?>
          <li><a class="js_scrolltolink" name="agenda">Agenda</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_verkiezingen'])) : ?>
          <li><a class="js_scrolltolink" name="verkiezingen">Verkiezingen</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_campagnes'])) : ?>
          <li><a class="js_scrolltolink" name="campagnes">Campagnes</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_organisatie'])) : ?>
          <li><a class="js_scrolltolink" name="organisatie">Organisatie</a></li>
          <?php endif; ?>        
          
          <?php if (!empty($content['spnet_afdeling'])) : ?>
          <li><a class="js_scrolltolink" name="afdeling">Afdeling</a></li>
          <?php endif; ?>
          
          <?php if (!empty($content['spnet_scholing'])) : ?>
          <li><a class="js_scrolltolink" name="scholing">Scholing</a></li>
          <?php endif; ?>

          <?php if (!empty($content['spnet_rood'])) : ?>
          <li><a class="js_scrolltolink" name="rood">ROOD</a></li>
          <?php endif; ?>

          <?php if (!empty($content['spnet_informatie'])) : ?>
          <li><a class="js_scrolltolink" name="informatie">Informatie</a></li>
          <?php endif; ?>       
                 
          <?php if (!empty($content['spnet_algemeen'])) : ?>
          <li><a class="js_scrolltolink" name="algemeen">Algemeen</a></li>
          <?php endif; ?>
          
        </ul>
      </div>
      <!-- SPNET MENU -->
      <?php if (!empty($content['spnet_menu'])) : ?>
        <div class="flex flex-column flex-wrap">
          <?php print $content['spnet_menu']; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  

  <!-- CONTENT -->
  <div id="spnet_content" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>

    <?php if (!empty($content['spnet_mededeling'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="mededelingen">Mededelingen</h1>
        <?php print $content['spnet_mededeling']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_landelijk'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="landelijk">Landelijk</h1>
        <?php print $content['spnet_landelijk']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_dashboard'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="dashboard">Dashboard</h1>
        <?php print $content['spnet_dashboard']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_mijnsp'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="mijnsp">Mijn SP</h1>
        <?php print $content['spnet_mijnsp']; ?>
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
        <h1 id="campagnes">Campagnes</h1>
        <?php print $content['spnet_campagnes']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_organisatie'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="organisatie">Organisatie</h1>
        <?php print $content['spnet_organisatie']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_afdeling'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="afdeling">Afdeling</h1>
        <?php print $content['spnet_afdeling']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_scholing'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="scholing">Scholing</h1>
        <?php print $content['spnet_scholing']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_rood'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="rood">ROOD</h1>
        <?php print $content['spnet_rood']; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($content['spnet_informatie'])) : ?>
    <div class="flex flex-row flex-wrap section">
        <h1 id="informatie">Informatie</h1>
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