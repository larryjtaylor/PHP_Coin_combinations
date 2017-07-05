<?php

    class Coins
    {
        function makeCoins($input)
        {
            $coins_arr = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];
            $nickels = intval($input / 5);
            $pennies = intval($input - ($nickels * 5));

            $coins_arr['nickels'] = $nickels;
            $coins_arr['pennies'] = $pennies;

            return $coins_arr;
        }
    }
?>
