<?php
declare(strict_types=1);

abstract class component
{

    public $text;
    public $class;
    public $id;

    public $elementList = [];

    public function __construct($text, $class,  $id  )
    {
        $this->id = $id;
        $this->text = $text;
        $this->class = $class;

    }
    public function findParent($id){
        $objectFounded = null;
        foreach ($this->elementList as $listItem) {
            if(count($listItem->elementList)){
                if ($listItem->id === $id) {
                    $objectFounded =  $listItem;
                    break;
                }else{
                    $objectFounded =  $listItem->findParent($id);
                }
            }
            if ($listItem->id === $id) {
                $objectFounded = $listItem;

            }
        }

        return $objectFounded;
    }

    public function addElement(component $c)
    {
        $this->elementList[]  = $c;
    }
    public abstract function remove(Component $c);
    public abstract function render();
}