<?php
require_once "src/ScrabbleGenerator.php";

class  ScrabbleGeneratorTest  extends PHPUnit_Framework_TestCase{

    function test_ScrabbleGenerator_oneLetter()
    {
        //Arrange
        $test_ScrabbleGenerator = new ScrabbleGenerator;
        //Act
        $input = "A";
        //Assert
        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals(1, $result);
    }
    function test_ScrabbleGenerator_onePointLetter()
    {
        $test_ScrabbleGenerator = new ScrabbleGenerator;

        $input = "S";

        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals(1, $result);
    }
    function test_ScrabbleGenerator_multipointLetter()
    {
        $test_ScrabbleGenerator = new ScrabbleGenerator;

        $input = "Q";

        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals(10, $result);
    }
}
 ?>
