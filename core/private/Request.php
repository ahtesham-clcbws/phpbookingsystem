<?php

class Request
{
    public static function uri()
    {
        // return trim(
        //     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        // );
        $result = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        if ($result[0] == 'business') {
            return 'business';
        } elseif ($result[0] == 'account') {
            return 'account';
        }elseif ($result[0] == 'place') {
            return 'place';
        }elseif ($result[0] == 'hosting') {
            return 'hosting';
        } else {
            return trim(
                parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
                '/'
            );
        }
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
    public static function count()
    {
        $result = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        return count($result);
    }
}
