

<script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
</form>
<div class="action_buttons">{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}  {if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}  {if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}  {if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Courses'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if}  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=EGO_Courses", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EGO_Courses_detailview_tabs"
>
<div >
<div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<!-- PANEL CONTAINER HERE.. -->
<table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.status.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="status" width='37.5%' colspan='3' >
{if !$fields.status.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="name" field="name" width='37.5%'  >
{if !$fields.name.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.ego_academicyear_ego_courses_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="ego_academicyear_ego_courses_name" width='37.5%'  >
{if !$fields.ego_academicyear_ego_courses_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ego_academicyear_ego_coursesego_academicyear_ida.value)}
{capture assign="detail_url"}index.php?module=EGO_Academicyear&action=DetailView&record={$fields.ego_academicyear_ego_coursesego_academicyear_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ego_academicyear_ego_coursesego_academicyear_ida" class="sugar_field" data-id-value="{$fields.ego_academicyear_ego_coursesego_academicyear_ida.value}">{$fields.ego_academicyear_ego_courses_name.value}</span>
{if !empty($fields.ego_academicyear_ego_coursesego_academicyear_ida.value)}</a>{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.day.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DAY' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="day" width='37.5%' colspan='3' >
{if !$fields.day.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.day.options)}
<input type="hidden" class="sugar_field" id="{$fields.day.name}" value="{ $fields.day.options }">
{ $fields.day.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.day.name}" value="{ $fields.day.value }">
{ $fields.day.options[$fields.day.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.scheduletime_start.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SCHEDULETIME_START' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="scheduletime_start" width='37.5%'  >
{if !$fields.scheduletime_start.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.scheduletime_start.value) <= 0}
{assign var="value" value=$fields.scheduletime_start.default_value }
{else}
{assign var="value" value=$fields.scheduletime_start.value }
{/if} 
<span class="sugar_field" id="{$fields.scheduletime_start.name}">{$fields.scheduletime_start.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.scheduletime_end.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_SCHEDULETIME_END' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="varchar" field="scheduletime_end" width='37.5%'  >
{if !$fields.scheduletime_end.hidden}
{counter name="panelFieldCount"}

{if strlen($fields.scheduletime_end.value) <= 0}
{assign var="value" value=$fields.scheduletime_end.default_value }
{else}
{assign var="value" value=$fields.scheduletime_end.value }
{/if} 
<span class="sugar_field" id="{$fields.scheduletime_end.name}">{$fields.scheduletime_end.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.rate_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_RATE_TYPE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="rate_type" width='37.5%'  >
{if !$fields.rate_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.rate_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.rate_type.name}" value="{ $fields.rate_type.options }">
{ $fields.rate_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.rate_type.name}" value="{ $fields.rate_type.value }">
{ $fields.rate_type.options[$fields.rate_type.value]}
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.assigned_user_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="assigned_user_name" width='37.5%'  >
{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount"}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.age_min.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AGE_MIN' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="age_min" width='37.5%'  >
{if !$fields.age_min.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.age_min.name}">
{sugar_number_format precision=0 var=$fields.age_min.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.age_max.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_AGE_MAX' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="age_max" width='37.5%'  >
{if !$fields.age_max.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.age_max.name}">
{sugar_number_format precision=0 var=$fields.age_max.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.student_min.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STUDENT_MIN' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="student_min" width='37.5%'  >
{if !$fields.student_min.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.student_min.name}">
{sugar_number_format precision=0 var=$fields.student_min.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.student_max.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_STUDENT_MAX' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="student_max" width='37.5%'  >
{if !$fields.student_max.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.student_max.name}">
{sugar_number_format precision=0 var=$fields.student_max.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="description" width='37.5%' colspan='3' >
{if !$fields.description.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='EGO_Courses'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<!-- PANEL CONTAINER HERE.. -->
<table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.public_web.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PUBLIC_WEB' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="public_web" width='37.5%'  >
{if !$fields.public_web.hidden}
{counter name="panelFieldCount"}

{if strval($fields.public_web.value) == "1" || strval($fields.public_web.value) == "yes" || strval($fields.public_web.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.public_web.name}" id="{$fields.public_web.name}" value="$fields.public_web.value" disabled="true" {$checked}>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
&nbsp;
</td>
<td class="" type="" field="" width='37.5%'  >
</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.promotion_web.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_WEB' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="promotion_web" width='37.5%' colspan='3' >
{if !$fields.promotion_web.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.promotion_web.name|escape:'html'|url2html|nl2br}">{$fields.promotion_web.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.promotion_url.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_URL' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="url" field="promotion_url" width='37.5%' colspan='3' >
{if !$fields.promotion_url.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.promotion_url.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.promotion_url.name}">
<a href='{$link|to_url}' target='_self' >{$link}</a>
</span>
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.promotion_image.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_IMAGE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="image" field="promotion_image" width='37.5%' colspan='3' >
{if !$fields.promotion_image.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.promotion_image.name}">
<img src="index.php?entryPoint=download&id={$fields.id.value}_{$fields.promotion_image.name}{$fields.width.value}&type={$module}" style="max-width: {if !$vardef.width}120{else}200{/if}px;" height="{if !$vardef.height}{else}50{/if}">
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.folder.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_FOLDER' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="url" field="folder" width='37.5%' colspan='3' >
{if !$fields.folder.hidden}
{counter name="panelFieldCount"}

{capture name=getLink assign=link}{$fields.folder.value}{/capture}
{if !empty($link)}
{capture name=getStart assign=linkStart}{$link|substr:0:7}{/capture}
<span class="sugar_field" id="{$fields.folder.name}">
<a href='{$link|to_url}' target='_self' >{$link}</a>
</span>
{/if}
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
</tr>
{/capture}
{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>