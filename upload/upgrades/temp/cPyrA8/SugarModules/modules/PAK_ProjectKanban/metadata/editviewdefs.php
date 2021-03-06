<?php
$module_name = 'PAK_ProjectKanban';
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
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type_project',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_PROJECT',
          ),
          1 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estimated_start_date',
            'label' => 'LBL_ESTIMATED_START_DATE ',
          ),
          1 => 
          array (
            'name' => 'estimated_end_date',
            'label' => 'LBL_ESTIMATED_END_DATE ',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'estimated_deadline_date',
            'label' => 'LBL_ESTIMATED_DEADLINE_DATE ',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cod_kanboard',
            'label' => 'LBL_COD_KANBOARD',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'gdrive',
            'label' => 'LBL_GDRIVE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'dropbox',
            'label' => 'LBL_DROPBOX',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'web',
            'label' => 'LBL_WEB',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
