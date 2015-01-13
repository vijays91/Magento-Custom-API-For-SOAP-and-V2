<?php
$api_url_v2 = "http://www.yousite.com/index.php/api/v2_soap/?wsdl=1";
$username = '*****';
$password = '*****';


$cli = new SoapClient($api_url_v2);
$session_id = $cli->login($username, $password);

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