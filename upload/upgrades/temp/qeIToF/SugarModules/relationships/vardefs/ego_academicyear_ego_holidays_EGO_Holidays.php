<?php
// created: 2017-01-02 21:41:54
$dictionary["EGO_Holidays"]["fields"]["ego_academicyear_ego_holidays"] = array (
  'name' => 'ego_academicyear_ego_holidays',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_holidays',
  'source' => 'non-db',
  'module' => 'EGO_Academicyear',
  'bean_name' => 'EGO_Academicyear',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_HOLIDAYS_FROM_EGO_ACADEMICYEAR_TITLE',
  'id_name' => 'ego_academicyear_ego_holidaysego_academicyear_ida',
);
$dictionary["EGO_Holidays"]["fields"]["ego_academicyear_ego_holidays_name"] = array (
  'name' => 'ego_academicyear_ego_holidays_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_HOLIDAYS_FROM_EGO_ACADEMICYEAR_TITLE',
  'save' => true,
  'id_name' => 'ego_academicyear_ego_holidaysego_academicyear_ida',
  'link' => 'ego_academicyear_ego_holidays',
  'table' => 'ego_academicyear',
  'module' => 'EGO_Academicyear',
  'rname' => 'name',
);
$dictionary["EGO_Holidays"]["fields"]["ego_academicyear_ego_holidaysego_academicyear_ida"] = array (
  'name' => 'ego_academicyear_ego_holidaysego_academicyear_ida',
  'type' => 'link',
  'relationship' => 'ego_academicyear_ego_holidays',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EGO_ACADEMICYEAR_EGO_HOLIDAYS_FROM_EGO_HOLIDAYS_TITLE',
);
