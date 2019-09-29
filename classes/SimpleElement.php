<?php
declare(strict_types=1);
include('component.php');

class SimpleElement extends component
{

    public $parentId;

    public function __construct($text,$class, $id, $parentId)
    {
        parent::__construct($text, $class, $id);

        $this->parentId = $parentId;
    }

    public function Remove(component $c)
    {
        // TODO: Implement Remove() method.
    }

    public function render(){
        $element =
            '<li>
                <a href="#">
                    <i class="fa '.$this->class.' fa-lg"></i>'.$this->text.'
                </a>
            </li>';
        return $element;
    }

}