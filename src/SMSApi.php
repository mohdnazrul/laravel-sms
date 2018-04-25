<?php
/**
 * API Library for SMS - Using One Way SMS.
 * User: Mohd Nazrul Bin Mustaffa
 * Date: 25/04/2018
 * Time: 11:16 AM
 */

namespace MohdNazrul\SMSLaravel;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class SMSApi
{
    private $username;
    private $password;
    private $serviceURL;

    public function __construct($username, $password, $serviceUrl){
        $this->username     =   $username;
        $this->password     =   $password;
        $this->serviceURL   =   $serviceUrl;
    }

    public function sendSMS($mobile_no, $msg){
        $url = $this->serviceURL."/?apiusername=".$this->username."&" .
            "apipassword=".$this->password."&mobileno=" .rawurlencode($mobile_no) .
            "&senderid=onewaysms&languagetype=1&message=" .rawurldecode(stripcslashes($msg));

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if($response > 0){
            return true;
        }

        return false;

    }
}