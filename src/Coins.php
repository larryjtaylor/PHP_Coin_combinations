<?php

    class Coins
    {
        function makeCoins($input)
        {
            $coins_arr = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];
            $quarters = intval($input / 25);
            $dimes = intval(($input - ($quarters * 25)) / 10);
            $nickels = intval(($input - ($quarters * 25) - ($dimes * 10)) / 5);
            $pennies = intval(($input - ($quarters * 25) - ($dimes * 10)) - ($nickels * 5));

            $coins_arr['quarters'] = $quarters;
            $coins_arr['dimes'] = $dimes;
            $coins_arr['nickels'] = $nickels;
            $coins_arr['pennies'] = $pennies;

            return $coins_arr;
        }
    }
?>
