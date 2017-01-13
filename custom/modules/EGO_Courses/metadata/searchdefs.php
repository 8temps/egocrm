<?php
$module_name = 'EGO_Courses';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ego_academicyear_ego_courses_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE',
        'id' => 'EGO_ACADEMICYEAR_EGO_COURSESEGO_ACADEMICYEAR_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ego_academicyear_ego_courses_name',
      ),
      'day' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_DAY',
        'width' => '10%',
        'name' => 'day',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
