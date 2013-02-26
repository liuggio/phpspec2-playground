<?php

namespace spec\PHPSpec2Playground\Proxy;

use PHPSpec2\ObjectBehavior;

class Proxy extends ObjectBehavior
{
    /**
     * @param integer $id
     */
    function let($id)
    {
        $this->beConstructedWith($id);
    }

    function it_should_be_initializable()
    {
        $this->shouldHaveType('PHPSpec2Playground\Proxy\Proxy');
    }

    function it_should_be_initializable_with_the_entity_interface()
    {
        $this->shouldBeAnInstanceOf('PHPSpec2Playground\Proxy\Entity\MyEntityInterface');
    }

}
