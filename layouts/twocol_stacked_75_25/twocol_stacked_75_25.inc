<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column stacked 75%, 25%'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_stacked.png',
  'theme' => 'twocol_stacked_75_25',
  'css' => 'twocol_stacked_75_25.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
