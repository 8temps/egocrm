<?php
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