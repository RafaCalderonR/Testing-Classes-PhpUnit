<?php

namespace Component;

class AccessHandler
{
    public static function check($role){
        return  Auth::check() && Auth::user()->getRole()===$role;
}}