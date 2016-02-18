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
        
        $OnePoint = preg_match_all("/[aeioulnrst]/i", $input, $ones);
        $TwoPoint =  preg_match_all("/[dg]/i", $input, $twos);
        $ThreePoint =  preg_match_all("/[bcmp]/i", $input, $threes);
        $FourPoint =  preg_match_all("/[fhvwy]/i", $input, $fours);
        $FivePoint =  preg_match_all("/[k]/i", $input, $fives);
        $EightPoint =  preg_match_all("/[jx]/i", $input, $eights);
        $TenPoint = preg_match_all("/[qz]/i", $input, $tens);

        $total = $OnePoint + (2 * $TwoPoint) + (3 * $ThreePoint) + (4 * $FourPoint) + (5 * $FivePoint) + (8 * $EightPoint) + (10 * $TenPoint);
        $this->setValue($total);

        //  $upInput = strtoupper($input);

        //  $splitWord = str_split($upInput);
        //
        //  foreach($splitWord as $letter){
        //     if ($letter == 'A' || $letter == 'E' || $letter == 'I' || $letter == 'O' || $letter == 'U' || $letter == 'L' || $letter == 'N' || $letter == 'R' || $letter == 'S' || $letter == 'T'){
        //         $this->setValue($this->value + 1);
        //     } elseif ($letter == 'D' || $letter == 'G'){
        //         $this->setValue($this->value + 2);
        //     } elseif ($letter == 'B' || $letter == 'C' || $letter == 'M' || $letter == 'P'){
        //         $this->setValue($this->value + 3);
        //     } elseif ($letter == 'F' || $letter == 'H' || $letter == 'V' || $letter == 'W' || $letter == 'Y'){
        //         $this->setValue($this->value + 4);
        //     } elseif ($letter == 'K' ){
        //         $this->setValue($this->value + 5);
        //     } elseif ($letter == 'J' || $letter == 'X'){
        //         $this->setValue($this->value + 8);
        //     } elseif ($letter == 'Q' || $letter == 'Z'){
        //         $this->setValue($this->value + 10);
        //     } else {
        //         return ("Please No Spaces or Punctuation");
        //     }
        // }
        return $this->getValue();
    }

} ?>
