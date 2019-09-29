<?php
declare(strict_types=1);

class CompositeElement extends component
{

    /**
     *
     * @param $text
     * @param $class
     * @param $id
     * @param $target
     * @param int $parentId
     */
    public $target;
    public $parentId;

    public function __construct($text, $class,  $id, $target, $parentId)
    {
        parent::__construct($text, $class,$id);
        $this->target = $target;
        $this->parentId = $parentId;
    }

    public function Remove(component $c)
    {
        // TODO: Implement Remove() method.
    }

    public function render()
    {
       $element =
       '<li data-toggle="collapse" data-target="#'.$this->target.'" class="collapsed background-perserve">
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