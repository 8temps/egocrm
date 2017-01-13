<?php
$module_name = 'EGO_Courses';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EGO_ACADEMICYEAR_EGO_COURSES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE',
    'id' => 'EGO_ACADEMICYEAR_EGO_COURSESEGO_ACADEMICYEAR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DAY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
    'default' => true,
  ),
  'SCHEDULETIME_START' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCHEDULETIME_START',
    'width' => '10%',
  ),
  'SCHEDULETIME_END' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SCHEDULETIME_END',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'AGE_MIN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_AGE_MIN',
    'width' => '10%',
    'default' => false,
  ),
  'AGE_MAX' => 
  array (
    'type' => 'int',
    'label' => 'LBL_AGE_MAX',
    'width' => '10%',
    'default' => false,
  ),
  'STUDENT_MIN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_STUDENT_MIN',
    'width' => '10%',
    'default' => false,
  ),
  'STUDENT_MAX' => 
  array (
    'type' => 'int',
    'label' => 'LBL_STUDENT_MAX',
    'width' => '10%',
    'default' => false,
  ),
  'RATE_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_RATE_TYPE',
    'width' => '10%',
  ),
);
?>
