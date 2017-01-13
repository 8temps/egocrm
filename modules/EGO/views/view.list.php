
<?php
require_once('modules/EGO/ego_tools.php');

class EGOViewList extends SugarView{
   
   function preDisplay() {
        parent::preDisplay();
    }

   
    public function display()
    {
        
        include ('view.factures.list.php');
        parent::display();
    } // display
}        

?>
