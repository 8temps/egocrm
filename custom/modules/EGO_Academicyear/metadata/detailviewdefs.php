<?php
require_once('modules/EGO/ego_tools.php');

$module_name = 'EGO_Academicyear';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'label' => 'LBL_DATE_START',
          ),
          1 => 
          array (
            'name' => 'date_end',
            'label' => 'LBL_DATE_END',
          ),
        ),
      ),
    ),
  ),
);
?>

<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-4">
        <div class="well">
			<h4 class="text-success"><span class="label label-success pull-right"><?=academy_get_cours_total_activated($focus->id);?> </span>Courses Activated</h4>
			<h4 class="text-primary"><span class="label label-primary pull-right"><?=academy_get_cours_total_open($focus->id);?> </span>Courses Open</h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
			<h4 class="text-success"><span class="label label-success pull-right"><?=academy_get_student_total($focus->id);?></span> Students </h4>
			<h4 class="text-primary"><span class="label label-primary pull-right"><?=academy_get_studentwaiting_total($focus->id);?></span> Students Waiting list </h4>  
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
            <a href="index.php?module=EGO&a=factures&id=<?=$focus->id;?>" class="button label-success" type="button" name="ReportFactureButton" value=""><span class="glyphicon glyphicon-signal"></span> Rapport des Factures</a>
<!--
            <a href="index.php?module=EGO&a=estimation&id=<?=$focus->id;?>" class="button" type="button" name="ReportFactureButton" value="">  <span class="glyphicon glyphicon-random"></span> Estimation des Factures</a>
            <a href="index.php?module=EGO&a=students&id=<?=$focus->id;?>" class="button" type="button" name="ReportFactureButton" value="">  <span class="glyphicon glyphicon-random"></span> Mailing list</a>
-->

        </div>
      </div>
    </div><!--/row-->    
  </div><!--/col-12-->
</div><!--/row-->
