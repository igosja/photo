<?php

class BtcController extends Controller
{
    public function actionIndex()
    {
        $url = "http://dev.cp.linksmanagement.com/view/bitcoin_ipn";

        $content = '{
                      "id": "46weUqzQggabgCjWPXVBFJ",
                      "url": "https://bitpay.com/invoice?id=46weUqzQggabgCjWPXVBFJ",
                      "status": "confirmed",
                      "btcPrice": "0.0512",
                      "price": 50,
                      "currency": "USD",
                      "invoiceTime": 1407881291063,
                      "expirationTime": 1407882191063,
                      "currentTime": 1407882058099,
                      "btcPaid": "0.0512",
                      "rate": 568.69,
                      "exceptionStatus": false,
                      "bitpay":
                        {
                          "id": "46weUqzQggabgCjWPXVBFJ",
                          "url": "https://bitpay.com/invoice?id=46weUqzQggabgCjWPXVBFJ",
                          "status": "confirmed",
                          "btcPrice": "0.0512",
                          "price": 50,
                          "currency": "USD",
                          "invoiceTime": 1407881291063,
                          "expirationTime": 1407882191063,
                          "currentTime": 1407882058099,
                          "btcPaid": "0.0512",
                          "rate": 568.69,
                          "exceptionStatus": false
                        }
                    }';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
        $json_response = curl_exec($curl);

//$data = json_decode($json_response, true);
        $data = $json_response;

        print '<pre>';
        print_r($data);
        exit;
    }
}