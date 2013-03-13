<?php

class Pulsar {

    public static $token;
    // DEFAULT URL PULSAR
    public static $url = "http://pul.cicero.maiasolucoes.com.br";

    public static function prepare($url) {
        $content = file_get_contents($url);
        $json = json_decode($content);
        return $json;
    }
    public static function login ($arguments = array()){
        if (empty($arguments['username']) or empty($arguments['password'])){
            return "Empty Fields";
        }
        $url = self::$url . "/auth/login?username=$arguments[username]&password=$arguments[password]";
        $status = self::status($url);
        switch($status){
            case "200":
                $data = self::prepare($url);
                self::$token = $data;
                break;
            case "404":
                $data = "Not found";
                break;
            default:
                $data = "Error";
        }

        return $data;
    }

    public static function who($token){
        $data = self::prepare(self::$url . "/user/user?token=$token");
        return $data;
    }

    public static function check() {
        $data = self::prepare(self::$url . "/auth/check");
        return $data;
    }

    public static function logout(){
        $content = self::prepare(self::$url . "/auth/logout");
        return $content;
    }

    public static function status($url) {
        // RETURN HTTP STATUS CODE
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }
}