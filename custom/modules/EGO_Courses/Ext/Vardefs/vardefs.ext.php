<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-01-03 12:05:28
$dictionary["EGO_Courses"]["fields"]["ego_courses_contacts"] = array (
  'name' => 'ego_courses_contacts',
  'type' => 'link',
  'relationship' => 'ego_courses_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_EGO_COURSES_CONTACTS_FROM_CONTACTS_TITLE',
);


// created: 2016-12-10 18:34:33
// David Largo
$dictionary["EGO_Courses"]["fields"]["ego_courses_students"] = array (
  'name' => 'ego_courses_students',
  'vname' => 'LBL_EGO_COURSES_STUNDENTS',
  'type' => 'varchar',
  'len' => '10',
  'source' => 'non-db',
);

$dictionary["EGO_Courses"]["fields"]["student_max"] = array (
    'required' => false,
    'name' => 'student_max',
    'vname' => 'LBL_STUDENT_MAX',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  );
  
$dictionary["EGO_Courses"]["fields"]["student_min"] = array (  
    'required' => false,
    'name' => 'student_min',
    'vname' => 'LBL_STUDENT_MIN',
    'type' => 'int',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  );


// created: 2017-01-03 12:05:28
$dictionary["EGO_Courses"]["fields"]["ego_courses_leads"] = array (
  'name' => 'ego_courses_leads',
  'type' => 'link',
  'relationship' => 'ego_courses_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_EGO_COURSES_LEADS_FROM_LEADS_TITLE',
);


// created: 2017-01-03 12:05:28
$dictionary["EGO_Courses"]["fields"]["ego_academicyear_ego_courses"] = array (
  'name' => 'ego_academicyear_ego_courses',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_courses',
  'source' => 'non-db',
  'module' => 'EGO_Academicyear',
  'bean_name' => 'EGO_Academicyear',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE',
  'id_name' => 'ego_academicyear_ego_coursesego_academicyear_ida',
);
$dictionary["EGO_Courses"]["fields"]["ego_academicyear_ego_courses_name"] = array (
  'name' => 'ego_academicyear_ego_courses_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE',
  'save' => true,
  'id_name' => 'ego_academicyear_ego_coursesego_academicyear_ida',
  'link' => 'ego_academicyear_ego_courses',
  'table' => 'ego_academicyear',
  'module' => 'EGO_Academicyear',
  'rname' => 'name',
);
$dictionary["EGO_Courses"]["fields"]["ego_academicyear_ego_coursesego_academicyear_ida"] = array (
  'name' => 'ego_academicyear_ego_coursesego_academicyear_ida',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_courses',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_COURSES_TITLE',
);

?>