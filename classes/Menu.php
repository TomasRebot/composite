<?php
declare(strict_types=1);

class Menu extends component
{

    public function __construct($text, $class, $target = null)
    {
        parent::__construct($text, $class, $target);

        self::load(include('dataStructures/dataStructure.php'));
    }

    public function remove(component $c)
    {
        // TODO: Implement remove() method.
    }

    public function load( array $structure)
    {
        foreach ($structure['menuItems'] as $proto) {
            if(isset($proto['target'])){
                $instance = new CompositeElement(
                    $proto['text'],
                    $proto['class'],
                    $proto['id'],
                    $proto['target'],
                    $proto['parentId']
                );
            }else{
                $instance = new SimpleElement($proto['text'], $proto['class'], $proto['id'], $proto['parentId']);
            }
            //dont have parent
            if (!intval($instance->parentId)) {
                $this->addElement($instance);
            }

            //have parent
            else {
               $objectFounded =  $this->findParent($instance->parentId);
               if($objectFounded != null){
                   $objectFounded->addElement($instance);
               }
            }
        }
        return $this;
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