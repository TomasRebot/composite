<?php
declare(strict_types=1);

abstract class component
{

    public $target;
    public $text;
    public $class;
    public $wrapperClass;

    public function __construct($text, $class, $wrapperClass = null , $target = null )
    {
        $this->target = $target;
        $this->text = $text;
        $this->class = $class;
        $this->wrapperClass = $wrapperClass;
    }

    public abstract function addElement(Component $c);
    public abstract function remove(Component $c);
    public abstract function render();
}