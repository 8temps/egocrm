<?php
 // created: 2017-01-16 16:31:06
$layout_defs["PAK_ProjectKanban"]["subpanel_setup"]['pak_projectkanban_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PAK_PROJECTKANBAN_CONTACTS_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'pak_projectkanban_contacts',
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
