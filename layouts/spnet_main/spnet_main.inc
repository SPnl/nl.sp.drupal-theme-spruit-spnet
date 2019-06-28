<?php

/**
 * @file
 * Plugin definition.
 */
$plugin = array(
  'title' => t('SPnet Main'),
  'category' => t('SPnet'),
  'icon' => 'spnet_main.png',
  'theme' => 'panels_spnet_main',
  'css' => 'spnet_main.css',
  'regions' => array(
    'spnet_menu' => t('Hoofdmenu'),
    'spnet_mededeling' => t('Mededelingen'),
    'spnet_dashboard' => t('Dashboard'),
    'spnet_mijnsp' => t('Mijn SP'),
    'spnet_agenda' => t('Agenda'),
    'spnet_landelijk' => t('Landelijk'),
    'spnet_afdeling' => t('Afdeling'),
    'spnet_organisatie' => t('Organisatie'),
    'spnet_verkiezingen' => t('Verkiezingen'),
    'spnet_campagnes' => t('Campagnes'),
    'spnet_scholing' => t('Scholing'),
    'spnet_footer' => t('Footer'),
    'spnet_rood' => t('ROOD'),
  ),
);
