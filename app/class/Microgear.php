<?php

    class Microgear
    {
        private $appkey = null;
        private $appsecret = null;
        private $url = "https://api.netpie.io/microgear/huggy/NodeMCU";
        private $ch;

        public function __construct($appkey, $appsecret){
            $this->appkey = $appkey;
            $this->appsecret = $appsecret;
            // $this->url = $this->url.$this->appkey."?auth=".$this->appkey.":".$this->appsecret;

        }

        public function turnOn(){
            try{
                $this->ch = curl_init();
                curl_setopt_array($this->ch, array(
                  CURLOPT_URL => "$this->url",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "PUT",
                  CURLOPT_POSTFIELDS => "ON",
                  CURLOPT_HTTPHEADER => array(
                    "authorization: Basic cTh6RFBJRGNocXhSU3drOlVnMzNZZEduakg0NllVaktjWTI3YkJXYlc=",
                    "cache-control: no-cache",
                    "content-type: text/plain",
                    "postman-token: 475f4409-d44c-1fb0-1a14-e7c4d8c2604f"
                  ),
                ));
                $status = curl_exec($this->ch);
                curl_close($this->ch);
                return $status;
            } catch(Exception $e){
                return $e->getMessage();
            }

        }

        public function turnOff(){
            try{
                $this->ch = curl_init();
                curl_setopt($this->ch, CURLOPT_URL, "$this->url");
                curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($this->ch, CURLOPT_POSTFIELDS, "OFF");
                $status = curl_exec($this->ch);
                curl_close($this->ch);
                return $status;
            } catch(Exception $e){
                return $e->getMessage();
            }

        }


    }



 ?>
