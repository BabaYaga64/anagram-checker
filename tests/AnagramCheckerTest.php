<?php
    require_once "src/AnagramChecker.php";

    class AnagramCheckerTest extends PHPUnit_Framework_TestCase
    {

        function test_makeAnagramChecker()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "a";
            $input2 = array('a');

            //Act
            $result = $test_AnagramChecker->makeAnagramChecker($input, $input2);

            //Assert
            $this->assertEquals(array('a'), $result);
        }

        function test_makeAnagramChecker_False()
        {
            //Arrange
            $test_AnagramChecker = new AnagramChecker;
            $input = "a";
            $input2 = array('b');

            //Act
            $result = $test_AnagramChecker->makeAnagramChecker($input, $input2);

            //Assert
            $this->assertEquals(array('b'), $result);
        }
    }

?>
