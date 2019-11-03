<?php


namespace Component;


class SessionArrayDriver
{
    public function __construct(array $data = array())
    {

        $this->data = $data;
    };

    public function load(){
        return $this->data;
    };



}