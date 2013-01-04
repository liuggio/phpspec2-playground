<?php

namespace spec\PHPSpec2Playground\Composite;

use PHPSpec2\ObjectBehavior;

class OneNode extends ObjectBehavior
{
    protected $first = 'OneNode-Info';

    function let() {
        $this->beConstructedWith($this->first);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('PHPSpec2Playground\Composite\OneNode');
    }

    function it_should_be_able_to_get_node_info()
    {
        $this->getNodeInfo(1)->shouldReturn($this->first);
    }

}
