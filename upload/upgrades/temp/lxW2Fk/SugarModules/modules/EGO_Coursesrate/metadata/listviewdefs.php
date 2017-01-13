<?php
$module_name = 'EGO_Coursesrate';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MINUTE_RANGE_MIN' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_MINUTE_RANGE_MIN',
    'width' => '10%',
  ),
  'MINUTE_RANGE_MAX' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_MINUTE_RANGE_MAX',
    'width' => '10%',
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
);
?>
