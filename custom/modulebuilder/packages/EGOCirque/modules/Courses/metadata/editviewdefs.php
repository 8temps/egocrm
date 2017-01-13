<?php
$module_name = 'EGO_Courses';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'public_web',
            'label' => 'LBL_PUBLIC_WEB',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'ego_academicyear_ego_courses_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'day',
            'studio' => 'visible',
            'label' => 'LBL_DAY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'scheduletime_start',
            'label' => 'LBL_SCHEDULETIME_START',
          ),
          1 => 
          array (
            'name' => 'scheduletime_end',
            'label' => 'LBL_SCHEDULETIME_END',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'rate_type',
            'studio' => 'visible',
            'label' => 'LBL_RATE_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'age_min',
            'label' => 'LBL_AGE_MIN',
          ),
          1 => 
          array (
            'name' => 'age_max',
            'label' => 'LBL_AGE_MAX',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'student_min',
            'label' => 'LBL_STUDENT_MIN',
          ),
          1 => 
          array (
            'name' => 'student_max',
            'label' => 'LBL_STUDENT_MAX',
          ),
        ),
        7 => 
        array (
          0 => 'description',
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'promotion_web',
            'studio' => 'visible',
            'label' => 'LBL_PROMOTION_WEB',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'promotion_url',
            'label' => 'LBL_PROMOTION_URL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'promotion_image',
            'studio' => 'visible',
            'label' => 'LBL_PROMOTION_IMAGE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'folder',
            'label' => 'LBL_FOLDER',
          ),
        ),
      ),
    ),
  ),
);
?>
