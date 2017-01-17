<?php
$module_name = 'PAK_ProjectKanban';
$listViewDefs [$module_name] = 
array (
  'COD_KANBOARD' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COD_KANBOARD',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ESTIMATED_START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ESTIMATED_START_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'ESTIMATED_DEADLINE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ESTIMATED_DEADLINE_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'ESTIMATED_END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_ESTIMATED_END_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
