<?php
 // created: 2017-01-03 09:53:06
$layout_defs["EGO_Academicyear"]["subpanel_setup"]['ego_academicyear_ego_holidays'] = array (
  'order' => 100,
  'module' => 'EGO_Holidays',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_ACADEMICYEAR_EGO_HOLIDAYS_FROM_EGO_HOLIDAYS_TITLE',
  'get_subpanel_data' => 'ego_academicyear_ego_holidays',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
