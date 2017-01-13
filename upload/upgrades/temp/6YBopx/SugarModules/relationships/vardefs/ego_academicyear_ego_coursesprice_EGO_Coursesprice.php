<?php
// created: 2017-01-03 09:25:40
$dictionary["EGO_Coursesprice"]["fields"]["ego_academicyear_ego_coursesprice"] = array (
  'name' => 'ego_academicyear_ego_coursesprice',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_coursesprice',
  'source' => 'non-db',
  'module' => 'EGO_Academicyear',
  'bean_name' => 'EGO_Academicyear',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESPRICE_FROM_EGO_ACADEMICYEAR_TITLE',
  'id_name' => 'ego_academicyear_ego_coursespriceego_academicyear_ida',
);
$dictionary["EGO_Coursesprice"]["fields"]["ego_academicyear_ego_coursesprice_name"] = array (
  'name' => 'ego_academicyear_ego_coursesprice_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESPRICE_FROM_EGO_ACADEMICYEAR_TITLE',
  'save' => true,
  'id_name' => 'ego_academicyear_ego_coursespriceego_academicyear_ida',
  'link' => 'ego_academicyear_ego_coursesprice',
  'table' => 'ego_academicyear',
  'module' => 'EGO_Academicyear',
  'rname' => 'name',
);
$dictionary["EGO_Coursesprice"]["fields"]["ego_academicyear_ego_coursespriceego_academicyear_ida"] = array (
  'name' => 'ego_academicyear_ego_coursespriceego_academicyear_ida',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_coursesprice',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSESPRICE_FROM_EGO_COURSESPRICE_TITLE',
);
