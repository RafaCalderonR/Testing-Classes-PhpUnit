<?php


namespace Component;


interface AuthenticatorContract
{

    public function check();

    public function user();

}