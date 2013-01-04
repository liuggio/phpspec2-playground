<?php

namespace PHPSpec2Playground\Factory;

class EntityB
{
    private $name;
    private $surname;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function returnAnInstanceOf()
    {
        // TODO: implement
    }
}
