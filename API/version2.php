<?php

ini_set("soap.wsdl_cache_enabled", "0"); /* Disable WSDL cache ( cache file in : tmp/ wsdl-***)*/

$api_url_v2 = "http://www.yousite.com/index.php/api/v2_soap/?wsdl=1";
$username = '*****';
$password = '*****';


$cli = new SoapClient($api_url_v2);
$session_id = $cli->login($username, $password);

// $functions = $client->__getFunctions (); /* Used for checking function(new api function) exist or not */
// print_r($functions);

//** Create 
// $result = $cli->customapiDemoCreate($session_id, array('name' => 'Test_name', 'pincode' => '123456', 'address' => 'Test_address'));

//** Update
// $result = $cli->customapiDemoUpdate($session_id, 2, array('address' => 'upt_address', 'name' => 'upt_name' ));

//** Info
// $result = $cli->customapiDemoInfo($session_id, 3);

//** Delete
// $result = $cli->customapiDemoDelete($session_id, 2);

//** List
// $result = $cli->customapiDemoList($session_id);


// echo "<pre>";
// print_r($result);

?>
