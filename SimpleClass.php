<?php
namespace oop;

class SimpleClass
{
    /**
     * constance
     */
    const constance = 1;

    /**
     * @var string
     */
    public $property = 'The property as variable';

    /**
     * a method
     */
    public function displayVar() {
        echo $this->property;
    }
}