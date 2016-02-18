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
         $upInput = strtoupper($input);
         $splitWord = str_split($upInput);

         foreach($splitWord as $letter){
            if ($letter == 'A' || $letter == 'E' || $letter == 'I' || $letter == 'O' || $letter == 'U' || $letter == 'L' || $letter == 'N' || $letter == 'R' || $letter == 'S' || $letter == 'T'){
                $this->setValue($this->value + 1);
            } elseif ($letter == 'D' || $letter == 'G'){
                $this->setValue($this->value + 2);
            } elseif ($letter == 'B' || $letter == 'C' || $letter == 'M' || $letter == 'P'){
                $this->setValue($this->value + 3);
            } elseif ($letter == 'F' || $letter == 'H' || $letter == 'V' || $letter == 'W' || $letter == 'Y'){
                $this->setValue($this->value + 4);
            } elseif ($letter == 'K' ){
                $this->setValue($this->value + 5);
            } elseif ($letter == 'J' || $letter == 'X'){
                $this->setValue($this->value + 8);
            } elseif ($letter == 'Q' || $letter == 'Z'){
                $this->setValue($this->value + 10);
            } else {
                return ("Please No Spaces or Punctuation");
            }
        }
        return $this->getValue();
    }

} ?>
