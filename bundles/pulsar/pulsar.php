<?php

class Pulsar {

    public static $token;
    // DEFAULT URL PULSAR
    public static $url = "http://pul.raphael.maiasolucoes.com.br";

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

        return $data->token;
    }

    public static function who() {

        //recebe o username e o token...provavelmente vai vir do metodo get_userToken
        $data = self::prepare(self::$url . "/user/user?username=$username&token=$token");
        return $data;
    }

    public static function check() {

        //recebe o username e o token...provavelmente vai vir do metodo get_userToken
        $data = self::prepare(self::$url . "/auth/check?username=$username&token=$token");
        return $data;
    }

    public static function logout($username,$token) {
        //recebe o username e o token...provavelmente vai vir do metodo get_userToken
        $content = self::prepare(self::$url . "/auth/logout?username=$username&token=$token");
        return $content;
    }

    public static function status($url) {
        // RETURN HTTP STATUS CODE
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }

    public static function get_user_token() {
        /*Session::get('username') != null ? $username = Session::get('username') : $username = null ;
        Session::get('token') != null ? $token = Session::get('token') : $token = null ;*/

		$username = Session::get('username') != null
			? Session::get('username')
			: null;
		$token = Session::get('token') != null
			? Session::get('token')
			: null;

        if(is_null($username) or is_null($token)) {
            return false;
        } else {
			return array(
				'username' => $username,
				'token' => $token
			);
        }

    }
}