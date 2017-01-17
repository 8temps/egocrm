<?php
 // created: 2017-01-16 17:50:44
$layout_defs["PAK_ProjectKanban"]["subpanel_setup"]['pak_projectkanban_aos_products'] = array (
  'order' => 100,
  'module' => 'AOS_Products',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PAK_PROJECTKANBAN_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'get_subpanel_data' => 'pak_projectkanban_aos_products',
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
