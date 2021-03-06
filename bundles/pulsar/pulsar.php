<?php

class Pulsar {

    // DEFAULT URL PULSAR
    public static $url = "http://pulsar.harmonycloud.com.br";
    private static $cache_timeout = 2;

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

            Cache::put('username',$arguments['username'], self::$cache_timeout);
            Cache::put('token',$prepare->token, self::$cache_timeout);
            return true;

        }

    }

    public static function who() {

		$result = self::get_user_token();
		if(!is_array($result)) {

			return "Not found";

		}
        $username = $result['username'];

        if (Cache::has($username)) {

            return Cache::get($username);

        }

        $token = $result['token'];
        $data = self::prepare(self::$url . "/user/user?token=$token&email=$username");
        $cache_user = $data->$username;
        Cache::put($username, $cache_user[0]->display_name, self::$cache_timeout);
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

            Cache::put('username',$username, self::$cache_timeout);
            Cache::put('token',$token, self::$cache_timeout);

			return array(
				'username' => $username,
				'token' => $token
			);

        }

    }

}
