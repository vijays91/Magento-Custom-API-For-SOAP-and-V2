<?php
class Vijaystore_Customapi_Model_Customapi_Api extends Mage_Api_Model_Resource_Abstract
{

    protected $_mapAttributes = array(
        'id' => 'id'
    );
	
    protected function _prepareData($data)
    {
       foreach ($this->_mapAttributes as $attributeAlias=>$attributeCode) {
            if(isset($data[$attributeAlias]))
            {
                $data[$attributeCode] = $data[$attributeAlias];
                unset($data[$attributeAlias]);
            }
        }
        return $data;
    }
	
    public function items()
    {
    	$result = Mage::getModel('customapi/demo')->getCollection()->getData();
        return $result;
    }

    public function create($demoData)
    {	
        $demoData = $this->_prepareData($demoData);
        try {
			$tutorial = Mage::getModel('customapi/demo')->setData($demoData)->save();
        } catch (Mage_Core_Exception $e) {
            $this->_fault('data_invalid', $e->getMessage());
        }
        return $tutorial->getId();
    }

    public function info($demoId)
    {
		$result = Mage::getModel('customapi/demo')->load($demoId)->getData();
        return $result;
    }

	public function update($demoId, $demoData)
	{
		$demoData = $this->_prepareData($demoData);

		$tutorial = Mage::getModel('customapi/demo')->load($demoId);
		$tutorial->addData($demoData);
		$tutorial->save();
		
		return $demoId;
	}

    public function delete($demoId)
    {
		$deleteData = Mage::getModel('customapi/demo')->load($demoId);	
        try {
            $deleteData->delete();
        } catch (Mage_Core_Exception $e) {
			return false;
        }
		return true;
    }
}
