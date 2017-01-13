<?php
 // created: 2017-01-03 12:01:01
$layout_defs["EGO_Academicyear"]["subpanel_setup"]['ego_academicyear_ego_coursesrate'] = array (
  'order' => 100,
  'module' => 'EGO_Coursesrate',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESRATE_FROM_EGO_COURSESRATE_TITLE',
  'get_subpanel_data' => 'ego_academicyear_ego_coursesrate',
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
