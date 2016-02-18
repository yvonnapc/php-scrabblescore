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

    function test_ScrabbleGenerator_caseInsensitive()
    {
        //Arrange
        $test_ScrabbleGenerator = new ScrabbleGenerator;
        //Act
        $input = "k";
        //Assert
        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals(5, $result);
    }
    function test_ScrabbleGenerator_Word()
    {
        $test_ScrabbleGenerator = new ScrabbleGenerator;

        $input = "Mulder";

        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals(9, $result);
    }

    function test_ScrabbleGenerator_NotaWord()
    {
        $test_ScrabbleGenerator = new ScrabbleGenerator;

        $input = "123'";

        $result = $test_ScrabbleGenerator->getScore($input);
        $this->assertEquals("Please No Spaces or Punctuation", $result);
    }
}
 ?>
