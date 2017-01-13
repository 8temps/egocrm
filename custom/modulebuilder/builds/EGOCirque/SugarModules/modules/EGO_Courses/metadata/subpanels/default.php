<?php
$module_name='EGO_Courses';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'EGO_Courses',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'day' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DAY',
      'width' => '10%',
      'default' => true,
    ),
    'scheduletime_start' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_SCHEDULETIME_START',
      'width' => '10%',
    ),
    'scheduletime_end' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_SCHEDULETIME_END',
      'width' => '10%',
    ),
    'assigned_user_name' => 
    array (
      'link' => true,
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'id' => 'ASSIGNED_USER_ID',
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Users',
      'target_record_key' => 'assigned_user_id',
    ),
    'status' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_STATUS',
      'width' => '10%',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'EGO_Courses',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'EGO_Courses',
      'width' => '5%',
      'default' => true,
    ),
  ),
);