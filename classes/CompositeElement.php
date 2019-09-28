<?php
declare(strict_types=1);

class CompositeElement extends component
{

    public function __construct($text, $class, $target  )
    {
        parent::__construct($text, $class, $target);
    }



    public function Remove(component $c)
    {
        // TODO: Implement Remove() method.
    }

    public function render()
    {
       $element =
       '<li data-toggle="collapse" data-target="#'.$this->target.'" class="collapsed">
            <a href="#"><i class="fa '.$this->class.' fa-lg"></i> '.$this->text.' <span class="arrow"></span></a>
        </li>
        <ul class="sub-menu collapse" id="'.$this->target.'">';
        foreach($this->elementList as $simpleElement){
            $element .= $simpleElement->render();
        }
        $element .='</ul>';
        return $element;

    }

}