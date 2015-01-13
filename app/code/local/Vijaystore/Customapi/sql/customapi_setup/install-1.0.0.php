<?php
$installer = $this;

$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('customapi/demo'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'ID')
	->addColumn('name',Varien_Db_Ddl_Table::TYPE_TEXT,100,array(
		'nullable'=>false
		),'Name')
	->addColumn('address', Varien_Db_Ddl_Table::TYPE_TEXT, 225, array(
		'nullable'=>false
        ), 'Address')
    ->addColumn('pincode', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned'  => true,
        'nullable'  => false,
        ), 'Postal Code');
		
	$installer->getConnection()->createTable($table);
	$installer->endSetup();
?>