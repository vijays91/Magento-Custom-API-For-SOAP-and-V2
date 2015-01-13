<?php
class Vijaystore_Customapi_Model_Customapi_Api_V2 extends Vijaystore_Customapi_Model_Customapi_Api
{
	protected function _prepareData($data)
	{
		if (null !== ($_data = get_object_vars($data))) {
			return parent::_prepareData($_data);
		}
		return array();
	}
}
