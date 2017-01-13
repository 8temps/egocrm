<?php
// created: 2017-01-03 12:00:10
$dictionary["ego_academicyear_ego_courses"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ego_academicyear_ego_courses' => 
    array (
      'lhs_module' => 'EGO_Academicyear',
      'lhs_table' => 'ego_academicyear',
      'lhs_key' => 'id',
      'rhs_module' => 'EGO_Courses',
      'rhs_table' => 'ego_courses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ego_academicyear_ego_courses_c',
      'join_key_lhs' => 'ego_academicyear_ego_coursesego_academicyear_ida',
      'join_key_rhs' => 'ego_academicyear_ego_coursesego_courses_idb',
    ),
  ),
  'table' => 'ego_academicyear_ego_courses_c',
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
      'name' => 'ego_academicyear_ego_coursesego_academicyear_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ego_academicyear_ego_coursesego_courses_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ego_academicyear_ego_coursesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ego_academicyear_ego_courses_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ego_academicyear_ego_coursesego_academicyear_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ego_academicyear_ego_courses_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ego_academicyear_ego_coursesego_courses_idb',
      ),
    ),
  ),
);