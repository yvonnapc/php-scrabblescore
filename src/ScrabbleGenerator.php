<?php
class ScrabbleGenerator {
    private $value;

    function __construct(){
        $this->value = 0;
    }

    function getValue(){
        return $this->value;
    }
    function setValue($value){
        $this->value = $value;
    }


    function getScore($input){
        if ($input == 'A' || $input == 'E' || $input == 'I' || $input == 'O' || $input == 'U' || $input == 'L' || $input == 'N' || $input == 'R' || $input == 'S' || $input == 'T'){
            $this->setValue($this->value + 1);
            return $this->getValue();
        }
    }

} ?>
