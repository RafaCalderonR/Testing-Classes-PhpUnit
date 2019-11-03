<?php


namespace Component\Stub;


use Component\AuthenticatorContract;

class AuthenticatorStub implements AuthenticatorContract
{

    public function check(){
        return true;
    }

    public function user()
    {
        return new User([
            'role'=> 'admin'
        ]);
    }

}