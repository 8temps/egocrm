<?php
// created: 2017-01-03 12:00:10
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
