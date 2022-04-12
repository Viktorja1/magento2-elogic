<?php

abstract class PersoneList { 
    abstract protected function getId(); 
}

class Persone extends PersoneList {
   public $name;
   private $profession;
   protected $id;

   public function getName($name) {
       return $this->name = $name;
   }

   public function getId() {
        return 1;
   }

   public function getProfession($profession) {
       return $this->profession = $profession;
   }

}

$persone1 = new Persone;
echo $persone1->getName('Lesja Lisna ');
echo $persone1->getId();
echo $persone1->getProfession(' barista'); 
