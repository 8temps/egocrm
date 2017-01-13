<?php
class students_logic_hooks
{

	/**
	* Called as process_record logic hook on the Performers module
	*/
	public function count_total_student($bean, $event, $arguments)
	{
		$nTotal = 0;
		$sLabel ="label-info";
		$sQuery = "SELECT count(*) as total
					FROM ego_courses, ego_courses_contacts_c
					WHERE
					ego_courses.id = ego_courses_contacts_c.ego_courses_contactsego_courses_ida
					AND ego_courses_contacts_c.deleted = 0
					AND ego_courses.id = \"". $bean->id . "\"";

		$resQuery = $GLOBALS["db"]->query($sQuery);
		if ($resQuery->num_rows != 0) {
			$rowQuery = $GLOBALS["db"]->fetchByAssoc($resQuery);
			$nTotal = $rowQuery['total'];
		}

		// Comparamos con min y max para el curso
		// Min = Danger
		//  Min > < Max - Success
		// Max > Warning
		
		$bean->ego_courses_students = $nTotal;
	} // end function


	/**
	 * Called for colorized students
	*/
	public function color_student_total($bean, $event, $arguments)
	{

		if ($bean->ego_courses_students < $bean->student_min)
			$sLabel= "label-warning";
		if ($bean->ego_courses_students >= $bean->student_min && $bean->ego_courses_students <= $bean->student_max)
			$sLabel= "label-success";
		if ($bean->ego_courses_students > $bean->student_max)
			$sLabel= "label-warning";

		$sHtml = "<span class=\"label ". $sLabel . "\">" . $bean->ego_courses_students  . "</span>";
		$bean->ego_courses_students = $sHtml;

	} // end function

	/**
	 * Called for colorized status
	*/
	public function color_status($bean, $event, $arguments)
	{
		switch ($bean->status){
			case 0:
				$sHtml = "<span class=\"label label-danger\">Cancel</span>";
				$bean->status = $sHtml;
				break;
			case 1:
				$sHtml = "<span class=\"label label-info\">Draft</span>";
				$bean->status = $sHtml;
				break;
			case 4:
				$sHtml = "<span class=\"label label-success\">Activated</span>";
				$bean->status = $sHtml;
				break;
		}


	}	 // end function


}
