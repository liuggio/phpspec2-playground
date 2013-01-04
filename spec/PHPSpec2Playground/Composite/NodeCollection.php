<?php

namespace spec\PHPSpec2Playground\Composite;

use PHPSpec2\ObjectBehavior;

class NodeCollection extends OneNode
{
    /**
     * @param PHPSpec2Playground\Composite\NodeAbstract $node
     */
    function let($node) {
        $node->getNodeInfo()->willReturn($this->first);
        $this->beConstructedWith($node);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('PHPSpec2Playground\Composite\NodeCollection');
    }

    /**
     * they have the same behaviour
     */
    function it_should_be_able_to_get_node_info()
    {
        parent::it_should_be_able_to_get_node_info();
    }


}
