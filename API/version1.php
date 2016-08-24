<?php

$api_url_v1 = "http://www.yousite.com/index.php/api/soap/?wsdl=1";
$username = '*****';
$password = '*****';


$cli = new SoapClient($api_url_v1);
$session_id = $cli->login($username, $password);

// ** Get Particular record Data
// $Info = $cli->call($session_id, 'customapi.info', 1);

// ** Create Data
// $create = $cli->call($session_id, 'customapi.create',array(array('name' => 'Test_name', 'address' => 'Test_address', 'pincode' => '123456')));

// ** Update Data
// $update = $cli->call($session_id, 'customapi.update', array('customapiId' => '1', 'customerData' => array('name' => 'upt_name', 'address' => 'upt_address')));

// ** Delete Data
// $delete = $cli->call($session_id, 'customapi.delete', 2);


//** List all data
// $listAll = $cli->call($session_id, 'customapi.list', array(array()));

// echo "<pre>";
// print_r($listAll);

?>
