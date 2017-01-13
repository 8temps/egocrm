<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'Total estudiantes inscritos', 'custom/modules/EGO_Courses/students_logic_hooks.php','students_logic_hooks', 'count_total_student'); 
$hook_array['process_record'][] = Array(2, 'Colores para Status', 'custom/modules/EGO_Courses/students_logic_hooks.php','students_logic_hooks', 'color_status'); 
//$hook_array['process_record'][] = Array(3, 'Colores para Total de estudiantes', 'custom/modules/EGO_Courses/students_logic_hooks.php','students_logic_hooks', 'color_student_total'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1002, 'Document Templates after_ui_frame Hook', 'custom/modules/EGO_Courses/DHA_DocumentTemplatesHooks.php','DHA_DocumentTemplatesEGO_CoursesHook_class', 'after_ui_frame_method'); 



?>
