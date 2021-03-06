<?php 
 $GLOBALS["dictionary"]["Project"]=array (
  'table' => 'project',
  'unified_search' => true,
  'full_text_search' => true,
  'unified_search_default_enabled' => false,
  'comment' => 'Project',
  'fields' => 
  array (
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_project',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'required' => true,
      'type' => 'id',
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'type' => 'assigned_user_name',
      'vname' => 'LBL_ASSIGNED_USER_ID',
      'required' => false,
      'len' => 36,
      'dbType' => 'id',
      'table' => 'users',
      'isnull' => false,
      'reportable' => true,
      'comment' => 'User assigned to this record',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED_USER_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED_BY',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'required' => true,
      'dbType' => 'varchar',
      'type' => 'name',
      'len' => 50,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Project name',
      'importable' => 'required',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'required' => false,
      'type' => 'text',
      'comment' => 'Project description',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'default' => '0',
      'comment' => 'Record deletion indicator',
    ),
    'estimated_start_date' => 
    array (
      'name' => 'estimated_start_date',
      'vname' => 'LBL_DATE_START',
      'required' => true,
      'validation' => 
      array (
        'type' => 'isbefore',
        'compareto' => 'estimated_end_date',
        'blank' => true,
      ),
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'estimated_end_date' => 
    array (
      'name' => 'estimated_end_date',
      'vname' => 'LBL_DATE_END',
      'required' => true,
      'type' => 'date',
      'importable' => 'required',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'project_status_dom',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'projects_priority_options',
    ),
    'total_estimated_effort' => 
    array (
      'name' => 'total_estimated_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT',
    ),
    'total_actual_effort' => 
    array (
      'name' => 'total_actual_effort',
      'type' => 'int',
      'source' => 'non-db',
      'vname' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT',
    ),
    'accounts' => 
    array (
      'name' => 'accounts',
      'type' => 'link',
      'relationship' => 'projects_accounts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_ACCOUNTS',
    ),
    'quotes' => 
    array (
      'name' => 'quotes',
      'type' => 'link',
      'relationship' => 'projects_quotes',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_QUOTES',
    ),
    'contacts' => 
    array (
      'name' => 'contacts',
      'type' => 'link',
      'relationship' => 'projects_contacts',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_CONTACTS',
    ),
    'opportunities' => 
    array (
      'name' => 'opportunities',
      'type' => 'link',
      'relationship' => 'projects_opportunities',
      'source' => 'non-db',
      'ignore_role' => true,
      'vname' => 'LBL_OPPORTUNITIES',
    ),
    'notes' => 
    array (
      'name' => 'notes',
      'type' => 'link',
      'relationship' => 'projects_notes',
      'source' => 'non-db',
      'vname' => 'LBL_NOTES',
    ),
    'tasks' => 
    array (
      'name' => 'tasks',
      'type' => 'link',
      'relationship' => 'projects_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_TASKS',
    ),
    'meetings' => 
    array (
      'name' => 'meetings',
      'type' => 'link',
      'relationship' => 'projects_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_MEETINGS',
    ),
    'calls' => 
    array (
      'name' => 'calls',
      'type' => 'link',
      'relationship' => 'projects_calls',
      'source' => 'non-db',
      'vname' => 'LBL_CALLS',
    ),
    'emails' => 
    array (
      'name' => 'emails',
      'type' => 'link',
      'relationship' => 'emails_projects_rel',
      'source' => 'non-db',
      'vname' => 'LBL_EMAILS',
    ),
    'projecttask' => 
    array (
      'name' => 'projecttask',
      'type' => 'link',
      'relationship' => 'projects_project_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_PROJECT_TASKS',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'projects_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'projects_modified_user',
      'vname' => 'LBL_MODIFIED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'projects_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_USER_NAME',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'dbType' => 'varchar',
      'link' => 'users',
      'len' => '255',
      'source' => 'non-db',
    ),
    'cases' => 
    array (
      'name' => 'cases',
      'type' => 'link',
      'relationship' => 'projects_cases',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_CASES',
    ),
    'bugs' => 
    array (
      'name' => 'bugs',
      'type' => 'link',
      'relationship' => 'projects_bugs',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_BUGS',
    ),
    'products' => 
    array (
      'name' => 'products',
      'type' => 'link',
      'relationship' => 'projects_products',
      'side' => 'right',
      'source' => 'non-db',
      'vname' => 'LBL_PRODUCTS',
    ),
    'project_users_1' => 
    array (
      'name' => 'project_users_1',
      'type' => 'link',
      'relationship' => 'project_users_1',
      'source' => 'non-db',
      'module' => 'Users',
      'bean_name' => 'User',
      'vname' => 'LBL_PROJECT_USERS_1_FROM_USERS_TITLE',
    ),
    'am_projecttemplates_project_1' => 
    array (
      'name' => 'am_projecttemplates_project_1',
      'type' => 'link',
      'relationship' => 'am_projecttemplates_project_1',
      'source' => 'non-db',
      'module' => 'AM_ProjectTemplates',
      'bean_name' => 'AM_ProjectTemplates',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE',
      'id_name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
    ),
    'am_projecttemplates_project_1_name' => 
    array (
      'name' => 'am_projecttemplates_project_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE',
      'save' => true,
      'id_name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
      'link' => 'am_projecttemplates_project_1',
      'table' => 'am_projecttemplates',
      'module' => 'AM_ProjectTemplates',
      'rname' => 'name',
    ),
    'am_projecttemplates_project_1am_projecttemplates_ida' => 
    array (
      'name' => 'am_projecttemplates_project_1am_projecttemplates_ida',
      'type' => 'link',
      'relationship' => 'am_projecttemplates_project_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE',
    ),
    'project_contacts_1' => 
    array (
      'name' => 'project_contacts_1',
      'type' => 'link',
      'relationship' => 'project_contacts_1',
      'source' => 'non-db',
      'module' => 'Contacts',
      'bean_name' => 'Contact',
      'vname' => 'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE',
    ),
    'aos_quotes_project' => 
    array (
      'name' => 'aos_quotes_project',
      'type' => 'link',
      'relationship' => 'aos_quotes_project',
      'source' => 'non-db',
    ),
    'override_business_hours' => 
    array (
      'name' => 'override_business_hours',
      'vname' => 'LBL_OVERRIDE_BUSINESS_HOURS',
      'type' => 'bool',
      'required' => false,
      'reportable' => false,
      'default' => '0',
      'comment' => '',
    ),
    'currency_id' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
      'id' => 'Projectcurrency_id',
      'custom_module' => 'Project',
    ),
    'show_datetime_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Show Date',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'show_datetime_c',
      'vname' => 'LBL_SHOW_DATETIME',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'Projectshow_datetime_c',
      'custom_module' => 'Project',
    ),
    'event_insurance_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Event insurance',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'event_insurance_c',
      'vname' => 'LBL_EVENT_INSURANCE',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectevent_insurance_c',
      'custom_module' => 'Project',
    ),
    'account_id_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'account_id_c',
      'vname' => 'LBL_LIGHT_PROVIDER_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'Projectaccount_id_c',
      'custom_module' => 'Project',
    ),
    'music_provider_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'music provider',
      'required' => false,
      'source' => 'non-db',
      'name' => 'music_provider_c',
      'vname' => 'LBL_MUSIC_PROVIDER',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'account_id1_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Projectmusic_provider_c',
      'custom_module' => 'Project',
    ),
    'work_space_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Work space ',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'work_space_c',
      'vname' => 'LBL_WORK_SPACE',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '8mx8m',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectwork_space_c',
      'custom_module' => 'Project',
    ),
    'technical_detail_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Technical detail',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'technical_detail_c',
      'vname' => 'LBL_TECHNICAL_DETAIL',
      'type' => 'text',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '80',
      'id' => 'Projecttechnical_detail_c',
      'custom_module' => 'Project',
    ),
    'defrayed_night_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'defrayed night',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'defrayed_night_c',
      'vname' => 'LBL_DEFRAYED_NIGHT',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectdefrayed_night_c',
      'custom_module' => 'Project',
    ),
    'account_id2_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'account_id2_c',
      'vname' => 'LBL_CONTACT_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'Projectaccount_id2_c',
      'custom_module' => 'Project',
    ),
    'dressing_rom_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Dressing rom',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'dressing_rom_c',
      'vname' => 'LBL_DRESSING_ROM',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectdressing_rom_c',
      'custom_module' => 'Project',
    ),
    'sound_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'sound',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'sound_c',
      'vname' => 'LBL_SOUND',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectsound_c',
      'custom_module' => 'Project',
    ),
    'defrayed_drink_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'defrayed drink',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'defrayed_drink_c',
      'vname' => 'LBL_DEFRAYED_DRINK',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectdefrayed_drink_c',
      'custom_module' => 'Project',
    ),
    'light_provider_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'light provider',
      'required' => false,
      'source' => 'non-db',
      'name' => 'light_provider_c',
      'vname' => 'LBL_LIGHT_PROVIDER',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Projectlight_provider_c',
      'custom_module' => 'Project',
    ),
    'defrayed_food_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'defrayed food',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'defrayed_food_c',
      'vname' => 'LBL_DEFRAYED_FOOD',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectdefrayed_food_c',
      'custom_module' => 'Project',
    ),
    'electricity_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'electricity',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'electricity_c',
      'vname' => 'LBL_ELECTRICITY',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectelectricity_c',
      'custom_module' => 'Project',
    ),
    'project_aos_products_1' => 
    array (
      'name' => 'project_aos_products_1',
      'type' => 'link',
      'relationship' => 'project_aos_products_1',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_PROJECT_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    ),
    'jjwg_maps_address_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'jjwg_maps_address_c',
      'vname' => 'LBL_JJWG_MAPS_ADDRESS',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => 'Address',
      'help' => 'Address',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectjjwg_maps_address_c',
      'custom_module' => 'Project',
    ),
    'contact_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Contact',
      'required' => false,
      'source' => 'non-db',
      'name' => 'contact_c',
      'vname' => 'LBL_CONTACT',
      'type' => 'relate',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'account_id2_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      'id' => 'Projectcontact_c',
      'custom_module' => 'Project',
    ),
    'jjwg_maps_lat_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'jjwg_maps_lat_c',
      'vname' => 'LBL_JJWG_MAPS_LAT',
      'type' => 'float',
      'massupdate' => '0',
      'default' => '0.00000000',
      'no_default' => false,
      'comments' => '',
      'help' => 'Latitude',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '10',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '8',
      'id' => 'Projectjjwg_maps_lat_c',
      'custom_module' => 'Project',
    ),
    'account_id1_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'account_id1_c',
      'vname' => 'LBL_MUSIC_PROVIDER_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '36',
      'size' => '20',
      'id' => 'Projectaccount_id1_c',
      'custom_module' => 'Project',
    ),
    'jjwg_maps_geocode_status_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'jjwg_maps_geocode_status_c',
      'vname' => 'LBL_JJWG_MAPS_GEOCODE_STATUS',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => 'Geocode Status',
      'help' => 'Geocode Status',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectjjwg_maps_geocode_status_c',
      'custom_module' => 'Project',
    ),
    'floor_fix_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'floor fix',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'floor_fix_c',
      'vname' => 'LBL_FLOOR_FIX',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectfloor_fix_c',
      'custom_module' => 'Project',
    ),
    'type_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'type du projet',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'type_c',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'projet_type_list',
      'studio' => 'visible',
      'dependency' => false,
      'id' => 'Projecttype_c',
      'custom_module' => 'Project',
    ),
    'defrayed_travel_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'defrayed travel',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'defrayed_travel_c',
      'vname' => 'LBL_DEFRAYED_TRAVEL',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectdefrayed_travel_c',
      'custom_module' => 'Project',
    ),
    'project_fp_events_1' => 
    array (
      'name' => 'project_fp_events_1',
      'type' => 'link',
      'relationship' => 'project_fp_events_1',
      'source' => 'non-db',
      'module' => 'FP_events',
      'bean_name' => 'FP_events',
      'side' => 'right',
      'vname' => 'LBL_PROJECT_FP_EVENTS_1_FROM_FP_EVENTS_TITLE',
    ),
    'event_advertising_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'event advertising',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'event_advertising_c',
      'vname' => 'LBL_EVENT_ADVERTISING',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectevent_advertising_c',
      'custom_module' => 'Project',
    ),
    'sky_fix_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Sky fix',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'sky_fix_c',
      'vname' => 'LBL_SKY_FIX',
      'type' => 'bool',
      'massupdate' => '0',
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'Projectsky_fix_c',
      'custom_module' => 'Project',
    ),
    'budget_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Budget',
      'required' => true,
      'source' => 'custom_fields',
      'name' => 'budget_c',
      'vname' => 'LBL_BUDGET',
      'type' => 'currency',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '26',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
      'id' => 'Projectbudget_c',
      'custom_module' => 'Project',
    ),
    'jjwg_maps_lng_c' => 
    array (
      'inline_edit' => 1,
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'jjwg_maps_lng_c',
      'vname' => 'LBL_JJWG_MAPS_LNG',
      'type' => 'float',
      'massupdate' => '0',
      'default' => '0.00000000',
      'no_default' => false,
      'comments' => '',
      'help' => 'Longitude',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '11',
      'size' => '20',
      'enable_range_search' => false,
      'precision' => '8',
      'id' => 'Projectjjwg_maps_lng_c',
      'custom_module' => 'Project',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projects_primary_key_index',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'relationships' => 
  array (
    'securitygroups_project' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_notes' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_tasks' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_meetings' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_calls' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_emails' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'Project',
    ),
    'projects_project_tasks' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'ProjectTask',
      'rhs_table' => 'project_task',
      'rhs_key' => 'project_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'projects_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
  ),
  'custom_fields' => true,
);