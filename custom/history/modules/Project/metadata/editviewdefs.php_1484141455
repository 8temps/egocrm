<?php
$viewdefs ['Project'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'form' => 
      array (
        'hidden' => '<input type="hidden" name="is_template" value="{$is_template}" />',
        'headerTpl' => 'modules/Project/tpls/header.tpl',
        'footerTpl' => 'modules/Project/tpls/footer.tpl',
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id ="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.projects.fill_invitees();document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'view_GanttChart\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\'; {/if} formSubmitCheck();"type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">',
          ),
          1 => 
          array (
            'customCode' => '{if !empty($smarty.request.return_action) && $smarty.request.return_action == "ProjectTemplatesDetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesDetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'DetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {elseif $is_template}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesListView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'index\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL{$place}"> {/if}',
          ),
        ),
      ),
      'javascript' => '<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
		{sugar_getscript file="cache/include/javascript/sugar_grp_project.js"}
		<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim} 
		function formSubmitCheck(){ldelim}if(check_form(\'EditView\')){ldelim}document.EditView.submit();{rdelim}{rdelim}</script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_PROJECT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_project_information' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'estimated_start_date',
          1 => 'estimated_end_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'show_datetime_c',
            'label' => 'LBL_SHOW_DATETIME',
          ),
          1 => 
          array (
            'name' => 'budget_c',
            'label' => 'LBL_BUDGET',
          ),
        ),
        4 => 
        array (
          0 => 'priority',
          1 => 'override_business_hours',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'contact_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
          ),
          1 => 'assigned_user_name',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Project description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'work_space_c',
            'label' => 'LBL_WORK_SPACE',
          ),
          1 => 
          array (
            'name' => 'dressing_rom_c',
            'label' => 'LBL_DRESSING_ROM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'floor_fix_c',
            'label' => 'LBL_FLOOR_FIX',
          ),
          1 => 
          array (
            'name' => 'sky_fix_c',
            'label' => 'LBL_SKY_FIX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'electricity_c',
            'label' => 'LBL_ELECTRICITY',
          ),
          1 => 
          array (
            'name' => 'sound_c',
            'label' => 'LBL_SOUND',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'light_provider_c',
            'studio' => 'visible',
            'label' => 'LBL_LIGHT_PROVIDER',
          ),
          1 => 
          array (
            'name' => 'music_provider_c',
            'studio' => 'visible',
            'label' => 'LBL_MUSIC_PROVIDER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'technical_detail_c',
            'studio' => 'visible',
            'label' => 'LBL_TECHNICAL_DETAIL',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'defrayed_drink_c',
            'label' => 'LBL_DEFRAYED_DRINK',
          ),
          1 => 
          array (
            'name' => 'defrayed_food_c',
            'label' => 'LBL_DEFRAYED_FOOD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'defrayed_travel_c',
            'label' => 'LBL_DEFRAYED_TRAVEL',
          ),
          1 => 
          array (
            'name' => 'defrayed_night_c',
            'label' => 'LBL_DEFRAYED_NIGHT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'event_insurance_c',
            'label' => 'LBL_EVENT_INSURANCE',
          ),
          1 => 
          array (
            'name' => 'event_advertising_c',
            'label' => 'LBL_EVENT_ADVERTISING',
          ),
        ),
      ),
    ),
  ),
);
?>
