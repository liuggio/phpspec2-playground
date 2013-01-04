<?php

namespace PHPSpec2Playground\Composite;

abstract class NodeAbstract
{
    abstract public function getNodeInfo($index = 1);
    abstract public function getNodeCount();

    public function addNode($node)
    {
        throw new \Exception('can\'t use this method');
    }
}
