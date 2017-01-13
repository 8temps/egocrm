<?php
 // created: 2017-01-02 21:41:53
$layout_defs["EGO_Courses"]["subpanel_setup"]['ego_courses_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_COURSES_CONTACTS_FROM_CONTACTS_TITLE',
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
