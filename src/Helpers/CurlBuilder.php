<?php
namespace Fandeco\DatabusClient\Helpers;
use Fandeco\DatabusClient\Abstracts\ResponseFactory;

class CurlBuilder implements ResponseFactory
{
    /**
     * @var false|resource
     */
    private  $curl;

    public function __construct($url, $data, $timeout = 30)
    {
        $this->curl = curl_init();
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => 'UTF-8',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'User-agent: databus-client'
            ),
        ));

        $this->setData($data);
    }

    public function setData($data)
    {
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data));
    }

    public function response():array
    {
        $response = curl_exec($this->curl);
        $this->close();
        return json_decode($response, 1);
    }
    private function close(){
        curl_close($this->curl);
    }
    public function __destruct()
    {
        $this->close();
    }
}
