<?php
$module_name='EGO_Coursesrate';
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
      'popup_module' => 'EGO_Coursesrate',
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
    'minute_range_min' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_MINUTE_RANGE_MIN',
      'width' => '10%',
    ),
    'minute_range_max' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_MINUTE_RANGE_MAX',
      'width' => '10%',
    ),
    'price' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_PRICE',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'EGO_Coursesrate',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'EGO_Coursesrate',
      'width' => '5%',
      'default' => true,
    ),
  ),
);