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
        } elseif ($input == 'D' || $input == 'G'){
            $this->setValue($this->value + 2);
        } elseif ($input == 'B' || $input == 'C' || $input == 'M' || $input == 'P'){
            $this->setValue($this->value + 3);
        } elseif ($input == 'F' || $input == 'H' || $input == 'V' || $input == 'W' || $input == 'Y'){
            $this->setValue($this->value + 4);
        } elseif ($input == 'K' ){
            $this->setValue($this->value + 5);
        } elseif ($input == 'J' || $input == 'X'){
            $this->setValue($this->value + 8);
        } elseif ($input == 'Q' || $input == 'Z'){
            $this->setValue($this->value + 10);
        }
        return $this->getValue();
    }

} ?>
