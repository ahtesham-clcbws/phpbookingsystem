<?php

class Request
{
    public static function uri()
    {
        // return trim(
        //     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        // );
        $result = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
        if ($result[0] == 'places') {
            return 'places';
        } elseif ($result[0] == 'bookings') {
            return 'bookings';
        } elseif ($result[0] == 'reviews') {
            return 'reviews';
        } elseif ($result[0] == 'users') {
            return 'users';
        } elseif ($result[0] == 'hosts') {
            return 'hosts';
        } elseif ($result[0] == 'subadmins') {
            return 'subadmins';
        } elseif ($result[0] == 'locations') {
            return 'locations';
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
