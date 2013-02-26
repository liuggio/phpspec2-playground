<?php

namespace PHPSpec2Playground\Proxy\Entity;

class MyEntity implements MyEntityInterface
{
    private $id;

    public function  __construct($id)
    {
        $this->id = $id;
    }

    public function get()
    {
        return "Entity " . $this->id;
    }
}