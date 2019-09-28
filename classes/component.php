<?php
declare(strict_types=1);

abstract class component
{

    public $target;
    public $text;
    public $class;
    public $wrapperClass;
    public $elementList = [];

    public function __construct($text, $class, $target = null )
    {
        $this->target = $target;
        $this->text = $text;
        $this->class = $class;

    }

    public function addElement(component $c)
    {
        $this->elementList[]  = $c;

    }
    public abstract function remove(Component $c);
    public abstract function render();
}