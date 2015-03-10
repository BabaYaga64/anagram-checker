<?php
    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagramChecker() //CORRECT TITLE??
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "bread";

            //Act
            $result = $test_AnagramChecker->makeAnagramChecker($input);

            //Assert
            $this->assertEquals("beard", $result);
        }

    }
?>
