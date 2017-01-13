<?php
$module_name = 'EGO_Holidays';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_START' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_START',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_END' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'default' => true,
  ),
  'EGO_ACADEMICYEAR_EGO_HOLIDAYS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_EGO_ACADEMICYEAR_EGO_HOLIDAYS_FROM_EGO_ACADEMICYEAR_TITLE',
    'id' => 'EGO_ACADEMICYEAR_EGO_HOLIDAYSEGO_ACADEMICYEAR_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
?>
