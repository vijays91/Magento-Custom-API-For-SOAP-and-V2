<?php
class Vijaystore_Customapi_Model_Resource_Demo extends Mage_Core_Model_Resource_Db_Abstract
{
	protected function _construct(){
		$this->_init('customapi/demo', 'id');
	}
}

?>