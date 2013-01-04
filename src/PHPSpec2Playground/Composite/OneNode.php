<?php

namespace PHPSpec2Playground\Composite;

class OneNode extends NodeAbstract
{
    private $info;
    public function __construct($info)
    {
       $this->info = $info;
    }

    public function getNodeInfo($index = 1)
    {
        if ($index != 1) {
            throw new \Exception('index not in range');
        }
        return $this->info;
    }

    public function getNodeCount()
    {
        return 1;
    }
}
