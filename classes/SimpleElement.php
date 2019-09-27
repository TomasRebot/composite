<?php
declare(strict_types=1);
include('component.php');

class SimpleElement extends component
{

    public $element;


    public function __construct($text, $class)
    {
        parent::__construct($text, $class);
        $this->addElement($this);

    }

    public function addElement(component $c)
    {
        $this->element = '<a class="'.$c->class.'" href="#">'.$c->text.'</a>';
    }

    public function Remove(component $c)
    {
        // TODO: Implement Remove() method.
    }

    public function render(){
        return $this->element;
    }

}