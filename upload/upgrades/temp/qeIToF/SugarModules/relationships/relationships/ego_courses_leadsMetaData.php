<?php
// created: 2017-01-02 21:41:53
$dictionary["ego_courses_leads"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ego_courses_leads' => 
    array (
      'lhs_module' => 'EGO_Courses',
      'lhs_table' => 'ego_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ego_courses_leads_c',
      'join_key_lhs' => 'ego_courses_leadsego_courses_ida',
      'join_key_rhs' => 'ego_courses_leadsleads_idb',
    ),
  ),
  'table' => 'ego_courses_leads_c',
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
      'name' => 'ego_courses_leadsego_courses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ego_courses_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ego_courses_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ego_courses_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ego_courses_leadsego_courses_ida',
        1 => 'ego_courses_leadsleads_idb',
      ),
    ),
  ),
);