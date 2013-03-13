<?php

class Pulsar {

    public static function prepare($url) {
        $content = file_get_contents($url);
        $json = json_decode($content);
        return $json;
    }
    public static function login ($arguments = array()){
        if (empty($arguments['username']) or empty($arguments['password'])){
            return "Empty Fields";
        }
        $url = "http://pul.cicero.maiasolucoes.com.br/auth/login?username=";
        $url .= "$arguments[username]&password=$arguments[password]";
        $status = self::status($url);
        switch($status){
            case "200":
                $data = self::prepare($url);
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
        $url = "http://pul.cicero.maiasolucoes.com.br/user/user?token=$token";
        $data = self::prepare($url);
        return $data;
    }

    public static function logout($user){
        $content = self::prepare("http://pul.cicero.maiasolucoes.com.br/auth/logout?username=".$user);
        return $content;
    }

    public static function status($url) {
        // RETURN HTTP STATUS CODE
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }
}