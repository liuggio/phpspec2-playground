<?php
namespace PHPSpec2Playground\Factory;

use Exception;

class Factory
{
    public static function createEntity($type = 'a')
    {
        $entity = null;
        switch (strtolower($type)) {
            case "a":
                $entity = new EntityA();
                break;
            case "b":
                $entity = new EntityB();
                break;
            default:
                throw new Exception('Not found');
                break;
        }
        return $entity;

    }

}
