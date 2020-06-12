<?php
class Select{
    public $name;
    public $value;

    function getName(){
      return $this->name;
    }

    function setName($name){
      $this->name = $name;
    }
   
    function setValue($value){
      if(is_array($value)){
        foreach($value as $key => $browser){
          $this->value[]=$browser;
        }
      }
    }

    function getValue(){
      return $this->value;
    }
    
    private function makeOptions($value){
      foreach ($value as $key => $browser) {
        echo "<option value='$browser'>$browser</option>";
      }
    }

   function makeSelect(){
      echo "<select name=".$this->getName().'>"';
      echo "<option value='0' selected>Choose browser</option>";
      echo $this->makeOptions($this->value);
      echo "</select>";
    }
  } 
  