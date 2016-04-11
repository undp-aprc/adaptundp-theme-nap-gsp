<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column 75% and 25%'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol.png',
  'theme' => 'panels_twocol_75_25',
  'css' => 'twocol-75-25.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
