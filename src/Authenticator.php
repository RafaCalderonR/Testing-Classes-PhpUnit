<?php


namespace Component;
use Component\SessionManager as Session ;

class Authenticator
{
    protected static $user;
    protected static $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public static function check(){
        return $this->user() != null;
    }

    public static function user()
    {
        if($this->user != null){
            return $this->user;
        }

        $data = $this->session->get('user_data');

        if(! is_null($data)){
            $this->user = new User($data);
        }

        return null;
    }
}