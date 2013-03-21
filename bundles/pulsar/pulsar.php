<?php

class Pulsar {

    // DEFAULT URL PULSAR
    public static $url = "http://pul.cicero.maiasolucoes.com.br";

    public static function prepare($url) {
        $content = file_get_contents($url);
        $json = json_decode($content);
        return $json;
    }
    public static function login ($arguments = array()){
        if (empty($arguments['username']) or empty($arguments['password'])){
            return 'Empty Fields';
        }
        $url = self::$url . "/auth/login?username=" . $arguments['username'] . "&password=" . $arguments['password'];
        $prepare = self::prepare($url);
        if(is_null($prepare) or !$prepare)  {

             return false;

        } else {

            Cache::put('username',$arguments['username'],1);
            Cache::put('token',$prepare->token,1);
            return true;

        }

    }

    public static function who() {

		$result = self::get_user_token();
		if(!is_array($result)) {
			return "Not found";
		}
        $username = $result['username'];
        $token = $result['token'];
        $data = self::prepare(self::$url . "/user/user?token=$token&email=$username");
        return $data;
    }

    public static function check() {

        $result = self::get_user_token();
        //return $result;
        if(!is_array($result)) {
            return false;
        }
        $username = $result['username'];
        $token = $result['token'];
        $data = self::prepare(self::$url . "/auth/check?username=$username&token=$token");
        return $data;
    }

    public static function logout() {
        $result = self::get_user_token();
        if(!is_array($result)) {
            return "Not found";
        }
        $username = $result['username'];
        $token = $result['token'];
        $content = self::prepare(self::$url . "/auth/logout?username=$username&token=$token");
        return $content;
    }

    public static function status($url) {
        // RETURN HTTP STATUS CODE
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }

    public static function get_user_token() {

        $username = Cache::has('username') ? Cache::get('username') : null;
        $token = Cache::has('token') ? Cache::get('token') : null;

        if(is_null($username) or is_null($token)) {

            return false;

        } else {

            Cache::put('username',$username,1);
            Cache::put('token',$token,1);

			return array(
				'username' => $username,
				'token' => $token
			);

        }

    }
}