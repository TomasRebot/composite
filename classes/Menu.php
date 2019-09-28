<?php
declare(strict_types=1);

class Menu extends component
{

    protected static $structure;
    public function __construct($text, $class, $target = null)
    {
        parent::__construct($text, $class, $target);
        self::$structure = include('dataStructures/dataStructure.php');
    }

    public function remove(component $c)
    {
        // TODO: Implement remove() method.
    }

    public function load(){
        foreach(self::$structure['complexes'] as $complex){
            $this->addElement(new CompositeElement($complex['text'], $complex['class'], $complex['target']));
        }
        foreach(self::$structure['simples'] as $index =>  $simple){
            $simpleElement = new SimpleElement($simple['text'], $simple['class'],  $simple['parent']);
            $simpleElement->addElement($this);
        }

    }

    public function render()
    {
        $element = '<div class="nav-side-menu">
        <div class="brand">Composite Menu</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">';
            foreach($this->elementList as $elementListItem){
                $element .= $elementListItem->render();
            }


          $element .= ' </ul>
        </div>
        </div>';
        return $element;
    }
}