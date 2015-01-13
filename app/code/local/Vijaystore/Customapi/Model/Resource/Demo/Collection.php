<?php
class Vijaystore_Customapi_Model_Resource_Demo_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{

	public function _construct(){
		$this->_init('customapi/demo');
	}

}
?>