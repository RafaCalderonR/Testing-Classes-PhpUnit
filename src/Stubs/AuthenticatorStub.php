<?php


namespace Component\Stub;


class AuthenticatorStub
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