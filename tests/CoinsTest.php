<?php
    require_once 'src/Coins.php';

    class CoinsTest extends PHPUnit_Framework_TestCase
    {
        function test_makeCoins_pennies()
        {
            //Arrange
            $test_coins = new Coins;
            $input = 2;

            //Act
            $result = $test_coins->makeCoins($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 2], $result);
        }

        function test_makeCoins_nickels()
        {

            //Arrange
            $test_coins = new Coins;
            $input = 7;

            //Act
            $result = $test_coins->makeCoins($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 0, 'nickels' => 1, 'pennies' => 2], $result);
        }

        function test_makeCoins_dimes()
        {

            //Arrange
            $test_coins = new Coins;
            $input = 17;

            //Act
            $result = $test_coins->makeCoins($input);

            //Assert
            $this->assertEquals(['quarters' => 0, 'dimes' => 1, 'nickels' => 1, 'pennies' => 2], $result);
        }

        function test_makeCoins_quarters()
        {

            //Arrange
            $test_coins = new Coins;
            $input = 42;

            //Act
            $result = $test_coins->makeCoins($input);

            //Assert
            $this->assertEquals(['quarters' => 1, 'dimes' => 1, 'nickels' => 1, 'pennies' => 2], $result);
        }
    }
?>
