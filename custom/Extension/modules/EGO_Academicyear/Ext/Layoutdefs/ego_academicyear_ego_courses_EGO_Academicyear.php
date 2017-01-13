<?php
 // created: 2017-01-03 12:05:28
$layout_defs["EGO_Academicyear"]["subpanel_setup"]['ego_academicyear_ego_courses'] = array (
  'order' => 100,
  'module' => 'EGO_Courses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_COURSES_TITLE',
  'get_subpanel_data' => 'ego_academicyear_ego_courses',
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
