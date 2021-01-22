<?php

abstract class ParentClass
{
    abstract public function someMethod1();

    abstract public function someMethod2($name, $color);

    abstract public function someMethod3(): string;
}

class Child extends ParentClass {
    public function someMethod2($name, $color)
    {
        // TODO: Implement someMethod2() method.
    }

    public function someMethod1()
    {
        // TODO: Implement someMethod1() method.
    }

    public function someMethod3(): string
    {
        // TODO: Implement someMethod3() method.
    }
}
