<?php

    class Microgear
    {
        private $appkey = null;
        private $appsecret = null;
        private $url = "https://api.netpie.io/microgear/smartfinger/";
        private $ch;

        public function __construct($appkey, $appsecret){
            $this->appkey = $appkey;
            $this->appsecret = $appsecret;
            $this->url = $this->url.$this->appkey."?auth=".$this->appkey.":".$this->appsecret;

        }

        public function turnOn(){
            try{
                $this->ch = curl_init();
                curl_setopt($this->ch, CURLOPT_URL, "$this->url");
                curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($this->ch, CURLOPT_POSTFIELDS, "ON");
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
