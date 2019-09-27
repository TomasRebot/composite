<?php
declare(strict_types=1);

class CompositeElement extends component
{
    public $element;
    public $elementList = [];
    public function __construct($text, $class, $wrapperClass , $target  )
    {
        parent::__construct($text, $class, $wrapperClass, $target);
    }

    public function addElement(component $c)
    {
        $this->elementList[]  = $c;

    }

    public function Remove(component $c)
    {
        // TODO: Implement Remove() method.
    }

    public function render()
    {
        $this->element .=   '<a class="nav-link dropdown-toggle '.$this->class.'" id="'.$this->target.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$this->text.'</a>';
        $this->element .= '<div class="dropdown-menu '.$this->wrapperClass.'"  aria-labelledby="'.$this->target.'">';
        foreach($this->elementList as $element){
            $this->element .=  $element->render();
        }
        $this->element .='</div>';
        return  $this->element;





    }

}