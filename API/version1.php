<?php

ini_set("soap.wsdl_cache_enabled", "0"); /* Disable WSDL cache ( file in : tmp/ wsdl-***)*/


$api_url_v1 = "http://www.yousite.com/index.php/api/soap/?wsdl=1";
$username = '*****';
$password = '*****';


$cli = new SoapClient($api_url_v1);
$session_id = $cli->login($username, $password);

// $functions = $client->__getFunctions (); /* Used for checking function(new api function) exist or not */
// print_r($functions);


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
