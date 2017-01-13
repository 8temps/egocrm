<?php
// created: 2017-01-03 09:25:40
$dictionary["EGO_Coursesrate"]["fields"]["ego_academicyear_ego_coursesrate"] = array (
  'name' => 'ego_academicyear_ego_coursesrate',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_coursesrate',
  'source' => 'non-db',
  'module' => 'EGO_Academicyear',
  'bean_name' => 'EGO_Academicyear',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESRATE_FROM_EGO_ACADEMICYEAR_TITLE',
  'id_name' => 'ego_academicyear_ego_coursesrateego_academicyear_ida',
);
$dictionary["EGO_Coursesrate"]["fields"]["ego_academicyear_ego_coursesrate_name"] = array (
  'name' => 'ego_academicyear_ego_coursesrate_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESRATE_FROM_EGO_ACADEMICYEAR_TITLE',
  'save' => true,
  'id_name' => 'ego_academicyear_ego_coursesrateego_academicyear_ida',
  'link' => 'ego_academicyear_ego_coursesrate',
  'table' => 'ego_academicyear',
  'module' => 'EGO_Academicyear',
  'rname' => 'name',
);
$dictionary["EGO_Coursesrate"]["fields"]["ego_academicyear_ego_coursesrateego_academicyear_ida"] = array (
  'name' => 'ego_academicyear_ego_coursesrateego_academicyear_ida',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_coursesrate',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESRATE_FROM_EGO_COURSESRATE_TITLE',
);
