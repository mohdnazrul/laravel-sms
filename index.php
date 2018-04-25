<?php
require "vendor/autoload.php";

$serviceURL = "http://gateway.onewaysms.com.my:10001/api.aspx";
$username = "API7XGKF37MX8";
$password = "API7XGKF37MX8T9067";

try {
//    $service = new \MohdNazrul\SMSL\SMSApi($username, $password, $serviceURL);
//    $dataArray = [
//        'SystemID' => 'SCBS',
//        'Service' => 'SMEDTLRPTS',
//        'ReportType' => 'CRR-II',
//        'MemberID' => 'CP9545',
//        'UserID' => 'PCP95450001',
//        'ReqNo' => '',
//        'SequenceNo' => '001',
//        'ReqDate' => '03/04/2018',
//        'PurposeStdCode' => 'CREREV',
//        'CostCenterStdCode' => '',
//        'ConsentFlag' => '',
//        'Subject' => [
//            'RegNo' => '175481T',
//            'RegName' => 'HBM MECHANICAL SERVICES SDN. BHD.',
//            'DateBR' => '11/02/1988',
//            'ConstitutionTypeStdCode' => '24',
//            'BusinessCouCodeStdCode' => '',
//            'BusinessStaCodeStdCode' => '',
//            'EntityCode' => '4130740',
//            'TradeEntityCode' => ''
//        ]
//    ];
//
//    $xml = $service->generateXMLFromArray($dataArray);
//
//    $res = $service->getReport($xml, false);
//
//
////     echo '<pre>'. htmlentities($xml).'</pre>';
//
////    $res = $service->getReport($xml, true);
//
////   var_dump( $res );

//   print_r($res);

} catch (Exception $e) {
    print_r($e->getMessage());
}
?>