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
  'DAY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DAY',
    'width' => '10%',
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
  'EGO_ACADEMICYEAR_EGO_COURSES_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE',
    'id' => 'EGO_ACADEMICYEAR_EGO_COURSESEGO_ACADEMICYEAR_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'EGO_COURSES_STUDENTS' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_EGO_COURSES_STUNDENTS',
    'width' => '10%',
    'sortable' => false,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'RATE_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RATE_TYPE',
    'width' => '10%',
    'default' => false,
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
    'default' => false,
    'label' => 'LBL_STUDENT_MIN',
    'width' => '10%',
  ),
  'STUDENT_MAX' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_STUDENT_MAX',
    'width' => '10%',
  ),
);
?>
