<?php
// created: 2017-01-16 17:50:44
$dictionary["PAK_Doodle"]["fields"]["pak_projectkanban_pak_doodle"] = array (
  'name' => 'pak_projectkanban_pak_doodle',
  'type' => 'link',
  'relationship' => 'pak_projectkanban_pak_doodle',
  'source' => 'non-db',
  'module' => 'PAK_ProjectKanban',
  'bean_name' => 'PAK_ProjectKanban',
  'vname' => 'LBL_PAK_PROJECTKANBAN_PAK_DOODLE_FROM_PAK_PROJECTKANBAN_TITLE',
  'id_name' => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
);
$dictionary["PAK_Doodle"]["fields"]["pak_projectkanban_pak_doodle_name"] = array (
  'name' => 'pak_projectkanban_pak_doodle_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PAK_PROJECTKANBAN_PAK_DOODLE_FROM_PAK_PROJECTKANBAN_TITLE',
  'save' => true,
  'id_name' => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
  'link' => 'pak_projectkanban_pak_doodle',
  'table' => 'pak_projectkanban',
  'module' => 'PAK_ProjectKanban',
  'rname' => 'name',
);
$dictionary["PAK_Doodle"]["fields"]["pak_projectkanban_pak_doodlepak_projectkanban_ida"] = array (
  'name' => 'pak_projectkanban_pak_doodlepak_projectkanban_ida',
  'type' => 'link',
  'relationship' => 'pak_projectkanban_pak_doodle',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PAK_PROJECTKANBAN_PAK_DOODLE_FROM_PAK_DOODLE_TITLE',
);
