<?php
// created: 2016-12-14 19:31:26
$dictionary["project_aos_products_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'project_aos_products_1' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'project_aos_products_1_c',
      'join_key_lhs' => 'project_aos_products_1project_ida',
      'join_key_rhs' => 'project_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'project_aos_products_1_c',
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
      'name' => 'project_aos_products_1project_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'project_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'project_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'project_aos_products_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'project_aos_products_1project_ida',
        1 => 'project_aos_products_1aos_products_idb',
      ),
    ),
  ),
);