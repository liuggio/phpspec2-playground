<?php

namespace PHPSpec2Playground\Composite;

class NodeCollection extends NodeAbstract
{
    public $nodes;

    public function __construct(NodeAbstract $node)
    {
        $this->addNode($node);
    }

    public function addNode($node)
    {
        $this->nodes[] = $node;
    }

    public function getNodeInfo($index = 1)
    {
        if (!isset($this->nodes[$index-1])) {
            throw new \Exception('index not in range');
        }

        return $this->nodes[$index-1]->getNodeInfo();
    }

    public function getNodeCount()
    {
        return count($this->nodes);
    }
}
