<?php

if( isset($_POST['submit']))
{
    $first_name=$_POST['name'];
    $country="Sri Lanka";
    $address=$_POST['address'];
    $phone=$_POST['mobile'];
    $email=$_POST['email'];
    $merchant_id="1212807";
    $return_url="www.test.com";
    $cancel_url="";
    $notify_url="";
    $last_name="";
    $city="";
    $order_id="";
    $items="";
    $currency="";
    $amount="1500";

    //echo $first_name;

    $data1 = array(
                 'merchant_id' => $merchant_id,
                 'return_url' => $return_url
                );
    

    function redirect_post($url, array $data, array $headers = null) {
        $params = array(
            'http' => array(
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        if (!is_null($headers)) {
            $params['http']['header'] = '';
            foreach ($headers as $k => $v) {
                $params['http']['header'] .= "$k: $v\n";
            }
        }
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if ($fp) {
            echo @stream_get_contents($fp);
            die();
        } else {
            // Error
            $php_errormsg = "error";
            throw new Exception("Error loading '$url', $php_errormsg");
        }
    }

    redirect_post("https://sandbox.payhere.lk/pay/checkout",$data1,null);

//     $data = array(
//         'merchant_id' => $merchant_id,
//         'return_url' => $return_url
//     );
//     # Create a connection
//     $url = 'https://sandbox.payhere.lk/pay/checkout';
//     $ch = curl_init($url);
//     # Form data string
//     $postString = http_build_query($data, '', '&');
//     # Setting our options
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     # Get the response
//     $response = curl_exec($ch);
//     curl_close($ch);



 }


?>