<?php

namespace spec\PHPSpec2Playground\Factory;

use PHPSpec2\ObjectBehavior;

class Factory extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('PHPSpec2Playground\Factory\Factory');
    }

    function it_should_create_a_new_entity_with_a_as_default()
    {
        $this->createEntity()->shouldBeAnInstanceOf('PHPSpec2Playground\Factory\EntityA');
    }

    function it_should_create_a_new_b_entity()
    {
        $this->createEntity('b')->shouldBeAnInstanceOf('PHPSpec2Playground\Factory\EntityB');
    }

    function it_should_throw_exception_during_creation_of_non_existant_type()
    {
        $this->shouldThrow('\Exception')->duringCreateEntity('X');
    }
}
