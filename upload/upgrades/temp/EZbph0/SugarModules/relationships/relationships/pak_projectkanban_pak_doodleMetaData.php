<?php
// created: 2017-01-16 16:31:06
$dictionary["pak_projectkanban_pak_doodle"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'pak_projectkanban_pak_doodle' => 
    array (
      'lhs_module' => 'PAK_ProjectKanban',
      'lhs_table' => 'pak_projectkanban',
      'lhs_key' => 'id',
      'rhs_module' => 'PAK_Doodle',
      'rhs_table' => 'pak_doodle',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pak_projectkanban_pak_doodle_c',
      'join_key_lhs' => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
      'join_key_rhs' => 'pak_projectkanban_pak_doodlepak_doodle_idb',
    ),
  ),
  'table' => 'pak_projectkanban_pak_doodle_c',
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
      'name' => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pak_projectkanban_pak_doodlepak_doodle_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pak_projectkanban_pak_doodlespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pak_projectkanban_pak_doodle_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pak_projectkanban_pak_doodle_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pak_projectkanban_pak_doodlepak_doodle_idb',
      ),
    ),
  ),
);