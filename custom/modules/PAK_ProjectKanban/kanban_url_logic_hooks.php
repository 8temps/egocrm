<?php
class kanban_url_logic_hooks
{

	/**
	* Called as process_record logic hook on the Performers module
	* required: field on the view list - listviewdefs.php
	*/
	public function make_kanban_url($bean, $event, $arguments)
	{
		$sHtml = '<a href="http://127.0.0.1/circosphere.ccproduction.ch/pak/?controller=BoardViewController&action=show&project_id='. $bean->cod_kanboard  .'" target="_blank"><span class="glyphicon glyphicon-th"></span> ' . $bean->cod_kanboard . '</a>';
		$bean->cod_kanboard = $sHtml;
	} // end function




}
