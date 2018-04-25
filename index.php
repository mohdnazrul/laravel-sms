<?php
require "vendor/autoload.php";

$serviceURL = "http://gateway.onewaysms.com.my:10001/api.aspx";
$username = "API7XGKF37MX8";
$password = "API7XGKF37MX8T9067";

try {
    $service = new \MohdNazrul\SMSLaravel\SMSApi($username,$password,$serviceURL);
    $response = $service->sendSMS('60172823975', 'TEST SMS');

    $msg = '';
    if($response){
        $msg = 'SMS is send';
    } else {
        $msg = 'Error';
    }
    echo $msg;

} catch (Exception $e) {
    print_r($e->getMessage());
}
?>