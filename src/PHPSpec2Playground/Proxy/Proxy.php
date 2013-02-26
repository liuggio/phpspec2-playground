<?php

namespace PHPSpec2Playground\Proxy;

use PHPSpec2Playground\Proxy\Entity\MyEntityInterface;

class Proxy implements MyEntityInterface
{
    private $id;
    private $counter;

    public function  __construct($id)
    {
        $this->id = $id;
        $this->counter = 0;
    }

    public function get()
    {
        static $entity = null;
        if ($entity === null) {
            $entity = new MyEntity($this->id);
            $this->counter++;
        }
        return $entity->get();
    }
}
