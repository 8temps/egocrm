<?php
 // created: 2017-01-03 11:04:34
$layout_defs["EGO_Coursesprice"]["subpanel_setup"]['ego_coursesprice_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EGO_COURSESPRICE_CONTACTS_FROM_CONTACTS_TITLE',
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
