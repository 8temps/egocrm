<?php
 // created: 2017-01-03 11:04:35
$layout_defs["Contacts"]["subpanel_setup"]['ego_courses_contacts'] = array (
  'order' => 100,
  'module' => 'EGO_Courses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_COURSES_CONTACTS_FROM_EGO_COURSES_TITLE',
  'get_subpanel_data' => 'ego_courses_contacts',
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
