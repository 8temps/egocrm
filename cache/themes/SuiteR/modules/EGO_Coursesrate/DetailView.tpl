

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
<div class="action_buttons">{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Coursesrate'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}  {if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Coursesrate'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}  {if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Coursesrate'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}  {if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='EGO_Coursesrate'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if}  {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=EGO_Coursesrate", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</td>
<td align="right" width="20%">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<div id="EGO_Coursesrate_detailview_tabs"
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
{if !$fields.name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='EGO_Coursesrate'}{/capture}
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
{if !$fields.ego_academicyear_ego_coursesrate_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_EGO_ACADEMICYEAR_EGO_COURSESRATE_FROM_EGO_ACADEMICYEAR_TITLE' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="relate" field="ego_academicyear_ego_coursesrate_name" width='37.5%'  >
{if !$fields.ego_academicyear_ego_coursesrate_name.hidden}
{counter name="panelFieldCount"}

{if !empty($fields.ego_academicyear_ego_coursesrateego_academicyear_ida.value)}
{capture assign="detail_url"}index.php?module=EGO_Academicyear&action=DetailView&record={$fields.ego_academicyear_ego_coursesrateego_academicyear_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="ego_academicyear_ego_coursesrateego_academicyear_ida" class="sugar_field" data-id-value="{$fields.ego_academicyear_ego_coursesrateego_academicyear_ida.value}">{$fields.ego_academicyear_ego_coursesrate_name.value}</span>
{if !empty($fields.ego_academicyear_ego_coursesrateego_academicyear_ida.value)}</a>{/if}
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
{if !$fields.minute_range_min.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTE_RANGE_MIN' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="minute_range_min" width='37.5%'  >
{if !$fields.minute_range_min.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.minute_range_min.name}">
{sugar_number_format precision=0 var=$fields.minute_range_min.value}
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.minute_range_max.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTE_RANGE_MAX' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="int" field="minute_range_max" width='37.5%'  >
{if !$fields.minute_range_max.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.minute_range_max.name}">
{sugar_number_format precision=0 var=$fields.minute_range_max.value}
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
{if !$fields.price.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRICE' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="currency" field="price" width='37.5%'  >
{if !$fields.price.hidden}
{counter name="panelFieldCount"}

<span id='{$fields.price.name}'>
{sugar_number_format var=$fields.price.value }
</span>
{/if}
<div class="inlineEditIcon"> {sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}</div>			</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.currency_id.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_CURRENCY' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="currency_id" field="currency_id" width='37.5%'  >
{if !$fields.currency_id.hidden}
{counter name="panelFieldCount"}
<span id='currency_id_span'>
{$fields.currency_id.value}
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
{if !$fields.period_type.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PERIOD_TYPE' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="enum" field="period_type" width='37.5%' colspan='3' >
{if !$fields.period_type.hidden}
{counter name="panelFieldCount"}


{if is_string($fields.period_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.period_type.name}" value="{ $fields.period_type.options }">
{ $fields.period_type.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.period_type.name}" value="{ $fields.period_type.value }">
{ $fields.period_type.options[$fields.period_type.value]}
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
{if !$fields.description.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='EGO_Coursesrate'}{/capture}
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
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
{capture name="tr" assign="tableRow"}
<tr>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.date_modified.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="datetime" field="date_modified" width='37.5%'  >
{if !$fields.date_modified.hidden}
{counter name="panelFieldCount"}


{assign var="value" value=03.01.2017 }
<span class="sugar_field" id="{$fields.date_modified.name}">{$value}</span>
{/if}
</td>
{counter name="fieldsUsed"}
<td width='12.5%' scope="col">
{if !$fields.modified_by_name.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_MODIFIED_NAME' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="" type="relate" field="modified_by_name" width='37.5%'  >
{if !$fields.modified_by_name.hidden}
{counter name="panelFieldCount"}

<span id="modified_user_id" class="sugar_field" data-id-value="{$fields.modified_user_id.value}">{$fields.modified_by_name.value}</span>
{/if}
</td>
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
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='EGO_Coursesrate'}
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
{capture name="label" assign="label"}{sugar_translate label='LBL_PUBLIC_WEB' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="bool" field="public_web" width='37.5%' colspan='3' >
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
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_WEB' module='EGO_Coursesrate'}{/capture}
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
{if !$fields.promotion_access.hidden}
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_ACCESS' module='EGO_Coursesrate'}{/capture}
{$label|strip_semicolon}:
{/if}
</td>
<td class="inlineEdit" type="text" field="promotion_access" width='37.5%' colspan='3' >
{if !$fields.promotion_access.hidden}
{counter name="panelFieldCount"}

<span class="sugar_field" id="{$fields.promotion_access.name|escape:'html'|url2html|nl2br}">{$fields.promotion_access.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
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