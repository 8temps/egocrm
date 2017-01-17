<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'Crear la url para kanban', 'custom/modules/PAK_ProjectKanban/kanban_url_logic_hooks.php','kanban_url_logic_hooks', 'make_kanban_url'); 
$hook_array['process_record'][] = Array(2, 'Colores para Status', 'custom/modules/PAK_ProjectKanban/color_logic_hooks.php','color_logic_hooks', 'color_status'); 


?>
