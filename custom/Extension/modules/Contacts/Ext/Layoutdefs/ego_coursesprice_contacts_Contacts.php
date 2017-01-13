<?php
 // created: 2017-01-03 12:05:28
$layout_defs["Contacts"]["subpanel_setup"]['ego_coursesprice_contacts'] = array (
  'order' => 100,
  'module' => 'EGO_Coursesprice',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_COURSESPRICE_CONTACTS_FROM_EGO_COURSESPRICE_TITLE',
  'get_subpanel_data' => 'ego_coursesprice_contacts',
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
