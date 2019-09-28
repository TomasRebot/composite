<?php
declare(strict_types=1);
include('component.php');

class SimpleElement extends component
{

    private $parent;
    public function __construct($text,$class, $parent = 0)
    {
        parent::__construct($text, $class);
        $this->parent = $parent;
    }
    public function addElement(component $c)
    {
        foreach($this->elementList as $element){
            if( $element instanceOf CompositeElement && $element['parent_id'] == $this->parent){
                $element->addElement($this);
            }else{
                $this->addElement($this);
            }
        }
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