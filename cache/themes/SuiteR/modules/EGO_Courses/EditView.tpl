

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_HEADER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=EGO_Courses'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_HEADER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=EGO_Courses", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</td>
<td align='right'>
{$PAGINATION}
</td>
</tr>
</table>{sugar_include include=$includes}
<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" >
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_{$module}_Subpanel'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='status_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''      accesskey='7'   
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.status.options }
{capture name="field_val"}{$fields.status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''          accesskey='7'  
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
<input
id="{$fields.status.name}-input"
name="{$fields.status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
id="btn-clear-{$fields.status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}');sync_{$fields.status.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.status.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.status.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='name_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
<td valign="top" id='ego_academicyear_ego_courses_name_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.ego_academicyear_ego_courses_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.ego_academicyear_ego_courses_name.name}" size="" value="{$fields.ego_academicyear_ego_courses_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.ego_academicyear_ego_courses_name.id_name}" 
id="{$fields.ego_academicyear_ego_courses_name.id_name}" 
value="{$fields.ego_academicyear_ego_coursesego_academicyear_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.ego_academicyear_ego_courses_name.name}" id="btn_{$fields.ego_academicyear_ego_courses_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.ego_academicyear_ego_courses_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ego_academicyear_ego_coursesego_academicyear_ida","name":"ego_academicyear_ego_courses_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.ego_academicyear_ego_courses_name.name}" id="btn_clr_{$fields.ego_academicyear_ego_courses_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.ego_academicyear_ego_courses_name.name}', '{$fields.ego_academicyear_ego_courses_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.ego_academicyear_ego_courses_name.name}']) != 'undefined'",
		enableQS
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='day_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DAY' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.day.name}" 
id="{$fields.day.name}" 
title=''       
>
{if isset($fields.day.value) && $fields.day.value != ''}
{html_options options=$fields.day.options selected=$fields.day.value}
{else}
{html_options options=$fields.day.options selected=$fields.day.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.day.options }
{capture name="field_val"}{$fields.day.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.day.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.day.name}" 
id="{$fields.day.name}" 
title=''          
>
{if isset($fields.day.value) && $fields.day.value != ''}
{html_options options=$fields.day.options selected=$fields.day.value}
{else}
{html_options options=$fields.day.options selected=$fields.day.default}
{/if}
</select>
<input
id="{$fields.day.name}-input"
name="{$fields.day.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.day.name}-image"></button><button type="button"
id="btn-clear-{$fields.day.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.day.name}-input', '{$fields.day.name}');sync_{$fields.day.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.day.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.day.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.day.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.day.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.day.name}{literal}");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.day.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.day.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.day.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.day.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.day.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='scheduletime_start_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SCHEDULETIME_START' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.scheduletime_start.value) <= 0}
{assign var="value" value=$fields.scheduletime_start.default_value }
{else}
{assign var="value" value=$fields.scheduletime_start.value }
{/if}  
<input type='text' name='{$fields.scheduletime_start.name}' 
id='{$fields.scheduletime_start.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
<td valign="top" id='scheduletime_end_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_SCHEDULETIME_END' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.scheduletime_end.value) <= 0}
{assign var="value" value=$fields.scheduletime_end.default_value }
{else}
{assign var="value" value=$fields.scheduletime_end.value }
{/if}  
<input type='text' name='{$fields.scheduletime_end.name}' 
id='{$fields.scheduletime_end.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='rate_type_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_RATE_TYPE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.rate_type.name}" 
id="{$fields.rate_type.name}" 
title=''       
>
{if isset($fields.rate_type.value) && $fields.rate_type.value != ''}
{html_options options=$fields.rate_type.options selected=$fields.rate_type.value}
{else}
{html_options options=$fields.rate_type.options selected=$fields.rate_type.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.rate_type.options }
{capture name="field_val"}{$fields.rate_type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.rate_type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.rate_type.name}" 
id="{$fields.rate_type.name}" 
title=''          
>
{if isset($fields.rate_type.value) && $fields.rate_type.value != ''}
{html_options options=$fields.rate_type.options selected=$fields.rate_type.value}
{else}
{html_options options=$fields.rate_type.options selected=$fields.rate_type.default}
{/if}
</select>
<input
id="{$fields.rate_type.name}-input"
name="{$fields.rate_type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.rate_type.name}-image"></button><button type="button"
id="btn-clear-{$fields.rate_type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.rate_type.name}-input', '{$fields.rate_type.name}');sync_{$fields.rate_type.name}()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.rate_type.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.rate_type.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.rate_type.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.rate_type.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.rate_type.name}{literal}");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.rate_type.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.rate_type.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.rate_type.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.rate_type.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.rate_type.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
<td valign="top" id='assigned_user_name_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='age_min_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_AGE_MIN' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.age_min.value) <= 0}
{assign var="value" value=$fields.age_min.default_value }
{else}
{assign var="value" value=$fields.age_min.value }
{/if}  
<input type='text' name='{$fields.age_min.name}' 
id='{$fields.age_min.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
<td valign="top" id='age_max_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_AGE_MAX' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.age_max.value) <= 0}
{assign var="value" value=$fields.age_max.default_value }
{else}
{assign var="value" value=$fields.age_max.value }
{/if}  
<input type='text' name='{$fields.age_max.name}' 
id='{$fields.age_max.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='student_min_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STUDENT_MIN' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.student_min.value) <= 0}
{assign var="value" value=$fields.student_min.default_value }
{else}
{assign var="value" value=$fields.student_min.value }
{/if}  
<input type='text' name='{$fields.student_min.name}' 
id='{$fields.student_min.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
<td valign="top" id='student_max_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_STUDENT_MAX' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strlen($fields.student_max.value) <= 0}
{assign var="value" value=$fields.student_max.default_value }
{else}
{assign var="value" value=$fields.student_max.value }
{/if}  
<input type='text' name='{$fields.student_max.name}' 
id='{$fields.student_max.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='description_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="6"
cols="80"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<div id="detailpanel_2" class="{$def.templateMeta.panelClass|default:'edit view edit508'}">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='EGO_Courses'}
<script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EDITVIEW_PANEL1'  class="yui3-skin-sam edit view panelContainer">
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='public_web_label' width='12.5%' data-total-columns="2" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PUBLIC_WEB' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
{counter name="panelFieldCount"}

{if strval($fields.public_web.value) == "1" || strval($fields.public_web.value) == "yes" || strval($fields.public_web.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.public_web.name}" value="0"> 
<input type="checkbox" id="{$fields.public_web.name}" 
name="{$fields.public_web.name}" 
value="1" title='' tabindex="0" {$checked} >
<td valign="top" id='_label' width='12.5%' data-total-columns="2" scope="col">
&nbsp;
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="2" >
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='promotion_web_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_WEB' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if empty($fields.promotion_web.value)}
{assign var="value" value=$fields.promotion_web.default_value }
{else}
{assign var="value" value=$fields.promotion_web.value }
{/if}
<textarea  id='{$fields.promotion_web.name}' name='{$fields.promotion_web.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='promotion_url_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_URL' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if !empty($fields.promotion_url.value)}
<input type='text' name='{$fields.promotion_url.name}' id='{$fields.promotion_url.name}' size='30' 
maxlength='255' value='{$fields.promotion_url.value}' title='' tabindex='0'  >
{else}
<input type='text' name='{$fields.promotion_url.name}' id='{$fields.promotion_url.name}' size='30' 
maxlength='255'	   	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} 
title='' tabindex='0'  >
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='promotion_image_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_PROMOTION_IMAGE' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

<script type="text/javascript">
    {literal}
        $( document ).ready(function() {
        $( "form#EditView" )
        .attr( "enctype", "multipart/form-data" )
        .attr( "encoding", "multipart/form-data" );
    });
{/literal}
</script>
<script type="text/javascript" src='include/SugarFields/Fields/Image/SugarFieldFile.js?v=HiiZegEo1f9qaoLD8OgIzQ'></script>
{if !empty($fields.promotion_image.value) }
{assign var=showRemove value=true}
{else}
{assign var=showRemove value=false}
{/if}
{assign var=noChange value=false}
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="{$fields.promotion_image.name}" id="{$fields.promotion_image.name}" value="{$fields.promotion_image.value}">
<input type="hidden" name="{$fields.promotion_image.name}_record_id" id="{$fields.promotion_image.name}_record_id" value="{$fields.id.value}">
<span id="{$fields.promotion_image.name}_old" style="display:{if !$showRemove}none;{/if}">
<a href="index.php?entryPoint=download&id={$fields.id.value}_{$fields.promotion_image.name}&type={$module}&time={$fields.date_modified.value}" class="tabDetailViewDFLink">{$fields.promotion_image.value}</a>
{if !$noChange}
<input type='button' class='button' id='remove_button' value='{$APP.LBL_REMOVE}' onclick='SUGAR.field.file.deleteAttachment("{$fields.promotion_image.name}","",this);'>
{/if}
</span>
{if !$noChange}
<span id="{$fields.promotion_image.name}_new" style="display:{if $showRemove}none;{/if}">
<input type="hidden" name="{$fields.promotion_image.name}_escaped">
<input id="{$fields.promotion_image.name}_file" name="{$fields.promotion_image.name}_file"
type="file" title='' size="30"
maxlength='255'
>
{else}

{/if}
<script type="text/javascript">
$( "#{$fields.promotion_image.name}_file{literal} " ).change(function() {
        $("#{/literal}{$fields.promotion_image.name}{literal}").val($("#{/literal}{$fields.promotion_image.name}_file{literal}").val());
});{/literal}
        </script>
</span>
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
{capture name="tr" assign="tableRow"}
<tr>
<td valign="top" id='folder_label' width='12.5%' data-total-columns="1" scope="col">
{capture name="label" assign="label"}{sugar_translate label='LBL_FOLDER' module='EGO_Courses'}{/capture}
{$label|strip_semicolon}:
</td>
{counter name="fieldsUsed"}

<td valign="top" width='37.5%' data-total-columns="1" colspan='3'>
{counter name="panelFieldCount"}

{if !empty($fields.folder.value)}
<input type='text' name='{$fields.folder.name}' id='{$fields.folder.name}' size='30' 
maxlength='255' value='{$fields.folder.value}' title='' tabindex='0'  >
{else}
<input type='text' name='{$fields.folder.name}' id='{$fields.folder.name}' size='30' 
maxlength='255'	   	   {if $displayView=='advanced_search'||$displayView=='basic_search'}value=''{else}value='http://'{/if} 
title='' tabindex='0'  >
{/if}
</tr>
{/capture}
{if $fieldsUsed > 0 }
{$tableRow}
{/if}
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
{/if}
</div></div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons">{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE_FOOTER">{/if}  {if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=EGO_Courses'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL_FOOTER"> {/if} {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=EGO_Courses", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div>
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date de création' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date de modification' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'day', 'enum', true,'{/literal}{sugar_translate label='LBL_DAY' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'student_max', 'int', false,'{/literal}{sugar_translate label='LBL_STUDENT_MAX' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'student_min', 'int', false,'{/literal}{sugar_translate label='LBL_STUDENT_MIN' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'age_min', 'int', false,'{/literal}{sugar_translate label='LBL_AGE_MIN' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'age_max', 'int', false,'{/literal}{sugar_translate label='LBL_AGE_MAX' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'scheduletime_start', 'varchar', true,'{/literal}{sugar_translate label='LBL_SCHEDULETIME_START' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'scheduletime_end', 'varchar', true,'{/literal}{sugar_translate label='LBL_SCHEDULETIME_END' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'rate_type', 'enum', false,'{/literal}{sugar_translate label='LBL_RATE_TYPE' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'price', 'currency', false,'{/literal}{sugar_translate label='LBL_PRICE' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'currency_id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'promotion_web', 'text', false,'{/literal}{sugar_translate label='LBL_PROMOTION_WEB' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'promotion_image', 'image', false,'{/literal}{sugar_translate label='LBL_PROMOTION_IMAGE' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'promotion_url', 'url', false,'{/literal}{sugar_translate label='LBL_PROMOTION_URL' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'folder', 'url', false,'{/literal}{sugar_translate label='LBL_FOLDER' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'public_web', 'bool', false,'{/literal}{sugar_translate label='LBL_PUBLIC_WEB' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'ego_courses_students', 'varchar', false,'{/literal}{sugar_translate label='LBL_EGO_COURSES_STUNDENTS' module='EGO_Courses' for_js=true}{literal}' );
addToValidate('EditView', 'ego_academicyear_ego_courses_name', 'relate', false,'{/literal}{sugar_translate label='LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE' module='EGO_Courses' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='EGO_Courses' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='EGO_Courses' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'ego_academicyear_ego_courses_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='EGO_Courses' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_EGO_ACADEMICYEAR_EGO_COURSES_FROM_EGO_ACADEMICYEAR_TITLE' module='EGO_Courses' for_js=true}{literal}', 'ego_academicyear_ego_coursesego_academicyear_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_ego_academicyear_ego_courses_name']={"form":"EditView","method":"query","modules":["EGO_Academicyear"],"group":"or","field_list":["name","id"],"populate_list":["ego_academicyear_ego_courses_name","ego_academicyear_ego_coursesego_academicyear_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Pas de correspondance"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Pas de correspondance"};</script>{/literal}