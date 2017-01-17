<?php
class color_logic_hooks
{


	/**
	 * Called for colorized status
	 * required: field status on the view list
	*/
	public function color_status($bean, $event, $arguments)
	{
		switch ($bean->status){
			case 0:
				$sHtml = "<span class=\"label label-danger\">Cancel</span>";
				$bean->status = $sHtml;
				break;
			case 5:
				$sHtml = "<span class=\"label label-success\">Activated</span>";
				$bean->status = $sHtml;
				break;
		}

	}	 // end function


}
