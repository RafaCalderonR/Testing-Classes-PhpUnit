<?php



namespace Component;


class SessionManager
{
    protected static $loaded = false;
    protected static $data = array();

    public function __construct(SessionFileDrive $driver)
    {
        $this->driver =$driver;
        $this->load();
    }

    protected static function load()
    {
        $this->$data = $this->load();

    }

    public static function get($key){



        return isset($this->$data[$key])
            ? static::$data[$key]
            : null;

    }

}