<?php /* Smarty version 2.6.29, created on 2017-01-12 12:11:00
         compiled from cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 33, false),array('function', 'counter', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 38, false),array('function', 'sugar_translate', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 48, false),array('function', 'sugar_getimage', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 65, false),array('function', 'sugar_ajax_url', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 107, false),array('function', 'sugar_number_format', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 254, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 352, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 49, false),array('modifier', 'escape', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 335, false),array('modifier', 'url2html', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 335, false),array('modifier', 'nl2br', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 335, false),array('modifier', 'substr', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 436, false),array('modifier', 'to_url', 'cache/themes/SuiteR/modules/EGO_Courses/DetailView.tpl', 438, false),)), $this); ?>


<script language="javascript">
<?php echo '
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
'; ?>

</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?>  <?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?>  <?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" id="delete_button"><?php endif; ?>  <?php if ($this->_tpl_vars['bean']->aclAccess('edit') && $this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" id="merge_duplicate_button"><?php endif; ?>  <?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=EGO_Courses", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?><div class="clear"></div></div>
</div>
</td>
<td align="right" width="20%"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EGO_Courses_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<!-- PANEL CONTAINER HERE.. -->
<table id='DEFAULT' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['status']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['status']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status']['options'][$this->_tpl_vars['fields']['status']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="name" field="name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['ego_academicyear_ego_courses_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="relate" field="ego_academicyear_ego_courses_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['ego_academicyear_ego_courses_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['ego_academicyear_ego_coursesego_academicyear_ida']['value'] )): ?>
<?php ob_start(); ?>index.php?module=EGO_Academicyear&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['ego_academicyear_ego_coursesego_academicyear_ida']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="ego_academicyear_ego_coursesego_academicyear_ida" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['ego_academicyear_ego_coursesego_academicyear_ida']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['ego_academicyear_ego_courses_name']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['ego_academicyear_ego_coursesego_academicyear_ida']['value'] )): ?></a><?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['day']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DAY','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="day" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['day']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['day']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['day']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['day']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['day']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['day']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['day']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['day']['options'][$this->_tpl_vars['fields']['day']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['scheduletime_start']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SCHEDULETIME_START','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="scheduletime_start" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['scheduletime_start']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['scheduletime_start']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['scheduletime_start']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['scheduletime_start']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['scheduletime_start']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['scheduletime_start']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['scheduletime_end']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SCHEDULETIME_END','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="varchar" field="scheduletime_end" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['scheduletime_end']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['scheduletime_end']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['scheduletime_end']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['scheduletime_end']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['scheduletime_end']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['scheduletime_end']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['rate_type']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RATE_TYPE','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="enum" field="rate_type" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['rate_type']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>



<?php if (is_string ( $this->_tpl_vars['fields']['rate_type']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['rate_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['rate_type']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['rate_type']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['rate_type']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['rate_type']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['rate_type']['options'][$this->_tpl_vars['fields']['rate_type']['value']]; ?>

<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="relate" field="assigned_user_name" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span id="assigned_user_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['age_min']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGE_MIN','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="int" field="age_min" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['age_min']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['age_min']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['age_min']['value']), $this);?>

</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['age_max']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AGE_MAX','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="int" field="age_max" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['age_max']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['age_max']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['age_max']['value']), $this);?>

</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['student_min']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STUDENT_MIN','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="int" field="student_min" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['student_min']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['student_min']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['student_min']['value']), $this);?>

</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['student_max']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STUDENT_MAX','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="int" field="student_max" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['student_max']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['student_max']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['student_max']['value']), $this);?>

</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['description']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['description']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html_entity_decode') : smarty_modifier_escape($_tmp, 'html_entity_decode')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("DEFAULT").style.display='none';</script>
<?php endif; ?>
<div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'EGO_Courses'), $this);?>

<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='<?php echo $this->_tpl_vars['gridline']; ?>
'>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['public_web']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PUBLIC_WEB','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="bool" field="public_web" width='37.5%'  >
<?php if (! $this->_tpl_vars['fields']['public_web']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strval ( $this->_tpl_vars['fields']['public_web']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['public_web']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['public_web']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="checkbox" class="checkbox" name="<?php echo $this->_tpl_vars['fields']['public_web']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['public_web']['name']; ?>
" value="$fields.public_web.value" disabled="true" <?php echo $this->_tpl_vars['checked']; ?>
>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['promotion_web']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROMOTION_WEB','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="text" field="promotion_web" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['promotion_web']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['promotion_web']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['fields']['promotion_web']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html_entity_decode') : smarty_modifier_escape($_tmp, 'html_entity_decode')))) ? $this->_run_mod_handler('url2html', true, $_tmp) : url2html($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['promotion_url']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROMOTION_URL','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="url" field="promotion_url" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['promotion_url']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['promotion_url']['value']; ?>
<?php $this->_smarty_vars['capture']['getLink'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
<?php if (! empty ( $this->_tpl_vars['link'] )): ?>
<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)); ?>
<?php $this->_smarty_vars['capture']['getStart'] = ob_get_contents();  $this->assign('linkStart', ob_get_contents());ob_end_clean(); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['promotion_url']['name']; ?>
">
<a href='<?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('to_url', true, $_tmp) : smarty_modifier_to_url($_tmp)); ?>
' target='_self' ><?php echo $this->_tpl_vars['link']; ?>
</a>
</span>
<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['promotion_image']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROMOTION_IMAGE','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="image" field="promotion_image" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['promotion_image']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['promotion_image']['name']; ?>
">
<img src="index.php?entryPoint=download&id=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
_<?php echo $this->_tpl_vars['fields']['promotion_image']['name']; ?>
<?php echo $this->_tpl_vars['fields']['width']['value']; ?>
&type=<?php echo $this->_tpl_vars['module']; ?>
" style="max-width: <?php if (! $this->_tpl_vars['vardef']['width']): ?>120<?php else: ?>200<?php endif; ?>px;" height="<?php if (! $this->_tpl_vars['vardef']['height']): ?><?php else: ?>50<?php endif; ?>">
</span>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php echo smarty_function_counter(array('name' => 'fieldsHidden','start' => 0,'print' => false,'assign' => 'fieldsHidden'), $this);?>

<?php ob_start(); ?>
<tr>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>

<td width='12.5%' scope="col">
<?php if (! $this->_tpl_vars['fields']['folder']['hidden']): ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FOLDER','module' => 'EGO_Courses'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<?php endif; ?>
</td>
<td class="inlineEdit" type="url" field="folder" width='37.5%' colspan='3' >
<?php if (! $this->_tpl_vars['fields']['folder']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['folder']['value']; ?>
<?php $this->_smarty_vars['capture']['getLink'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
<?php if (! empty ( $this->_tpl_vars['link'] )): ?>
<?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 7) : substr($_tmp, 0, 7)); ?>
<?php $this->_smarty_vars['capture']['getStart'] = ob_get_contents();  $this->assign('linkStart', ob_get_contents());ob_end_clean(); ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['folder']['name']; ?>
">
<a href='<?php echo ((is_array($_tmp=$this->_tpl_vars['link'])) ? $this->_run_mod_handler('to_url', true, $_tmp) : smarty_modifier_to_url($_tmp)); ?>
' target='_self' ><?php echo $this->_tpl_vars['link']; ?>
</a>
</span>
<?php endif; ?>
<?php endif; ?>
<div class="inlineEditIcon"> <?php echo smarty_function_sugar_getimage(array('name' => "inline_edit_icon.svg",'attr' => 'border="0" ','alt' => ($this->_tpl_vars['alt_edit'])), $this);?>
</div>			</td>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['fieldsUsed'] > 0 && $this->_tpl_vars['fieldsUsed'] != $this->_tpl_vars['fieldsHidden']): ?>
<?php echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
<?php endif; ?>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script><script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>