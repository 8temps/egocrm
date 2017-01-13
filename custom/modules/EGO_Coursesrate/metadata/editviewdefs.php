<?php
$module_name = 'EGO_Coursesrate';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'ego_academicyear_ego_coursesrate_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'minute_range_min',
            'label' => 'LBL_MINUTE_RANGE_MIN',
          ),
          1 => 
          array (
            'name' => 'minute_range_max',
            'label' => 'LBL_MINUTE_RANGE_MAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
          1 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'period_type',
            'studio' => 'visible',
            'label' => 'LBL_PERIOD_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'public_web',
            'label' => 'LBL_PUBLIC_WEB',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'promotion_web',
            'studio' => 'visible',
            'label' => 'LBL_PROMOTION_WEB',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'promotion_access',
            'studio' => 'visible',
            'label' => 'LBL_PROMOTION_ACCESS',
          ),
        ),
      ),
    ),
  ),
);
?>
