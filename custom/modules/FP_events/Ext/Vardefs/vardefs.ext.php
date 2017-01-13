<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-01-04 08:25:37
$dictionary["FP_events"]["fields"]["project_fp_events_1"] = array (
  'name' => 'project_fp_events_1',
  'type' => 'link',
  'relationship' => 'project_fp_events_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_FP_EVENTS_1_FROM_PROJECT_TITLE',
  'id_name' => 'project_fp_events_1project_ida',
);
$dictionary["FP_events"]["fields"]["project_fp_events_1_name"] = array (
  'name' => 'project_fp_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECT_FP_EVENTS_1_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'project_fp_events_1project_ida',
  'link' => 'project_fp_events_1',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["FP_events"]["fields"]["project_fp_events_1project_ida"] = array (
  'name' => 'project_fp_events_1project_ida',
  'type' => 'link',
  'relationship' => 'project_fp_events_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECT_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
);

?>