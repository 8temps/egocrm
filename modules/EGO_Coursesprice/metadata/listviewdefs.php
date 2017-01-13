<?php
$module_name = 'EGO_Coursesprice';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'EGO_ACADEMICYEAR_EGO_COURSESPRICE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESPRICE_FROM_EGO_ACADEMICYEAR_TITLE',
    'id' => 'EGO_ACADEMICYEAR_EGO_COURSESPRICEEGO_ACADEMICYEAR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
?>
