<?php


namespace Component;


class Session
{
    protected static $data = array();

    public static function get($key){
        return isset(static::$data[$key])
            ? static::$data[$key]
            :null;

    }

}