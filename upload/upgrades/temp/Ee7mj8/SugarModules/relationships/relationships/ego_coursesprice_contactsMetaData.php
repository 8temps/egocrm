<?php
// created: 2017-01-03 12:01:01
$dictionary["ego_coursesprice_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ego_coursesprice_contacts' => 
    array (
      'lhs_module' => 'EGO_Coursesprice',
      'lhs_table' => 'ego_coursesprice',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ego_coursesprice_contacts_c',
      'join_key_lhs' => 'ego_coursesprice_contactsego_coursesprice_ida',
      'join_key_rhs' => 'ego_coursesprice_contactscontacts_idb',
    ),
  ),
  'table' => 'ego_coursesprice_contacts_c',
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
      'name' => 'ego_coursesprice_contactsego_coursesprice_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ego_coursesprice_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ego_coursesprice_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ego_coursesprice_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ego_coursesprice_contactsego_coursesprice_ida',
        1 => 'ego_coursesprice_contactscontacts_idb',
      ),
    ),
  ),
);