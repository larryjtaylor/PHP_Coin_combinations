<?php
    require_once 'src/Coins.php';

    class CoinsTest extends PHPUnit_Framework_TestCase
    {
        function test_makeCoins()
        {
            //Arrange
            $test_cents = new Coins;
            $input = 43;

            //Act
            $result = $test_cents->makeCoins($input);

            //Assert
            $this->assertEquals(43 . ' pennies', $result);
        }
    }
?>
