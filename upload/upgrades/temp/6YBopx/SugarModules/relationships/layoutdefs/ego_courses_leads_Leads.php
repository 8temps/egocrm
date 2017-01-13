<?php
 // created: 2017-01-03 09:25:40
$layout_defs["Leads"]["subpanel_setup"]['ego_courses_leads'] = array (
  'order' => 100,
  'module' => 'EGO_Courses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_COURSES_LEADS_FROM_EGO_COURSES_TITLE',
  'get_subpanel_data' => 'ego_courses_leads',
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
