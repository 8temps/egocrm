<?php
// created: 2017-01-16 17:50:44
$dictionary["pak_projectkanban_aos_products"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'pak_projectkanban_aos_products' => 
    array (
      'lhs_module' => 'PAK_ProjectKanban',
      'lhs_table' => 'pak_projectkanban',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pak_projectkanban_aos_products_c',
      'join_key_lhs' => 'pak_projectkanban_aos_productspak_projectkanban_ida',
      'join_key_rhs' => 'pak_projectkanban_aos_productsaos_products_idb',
    ),
  ),
  'table' => 'pak_projectkanban_aos_products_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'pak_projectkanban_aos_productspak_projectkanban_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pak_projectkanban_aos_productsaos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pak_projectkanban_aos_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pak_projectkanban_aos_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pak_projectkanban_aos_productspak_projectkanban_ida',
        1 => 'pak_projectkanban_aos_productsaos_products_idb',
      ),
    ),
  ),
);