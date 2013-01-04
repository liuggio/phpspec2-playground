<?php

namespace spec\PHPSpec2Playground\Singleton;

use PHPSpec2\ObjectBehavior;

class Singleton extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('PHPSpec2Playground\Singleton\Singleton');
    }

    function it_should_create_a_new_instance()
    {
        $this->singleton()->shouldBeAnInstanceOf('PHPSpec2Playground\Singleton\Singleton');
    }

    function it_should_create_the_same_object_twice()
    {
        $this->singleton()->shouldBeEqualTo($this->singleton());
    }

}
