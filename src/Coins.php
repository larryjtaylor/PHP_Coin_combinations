<?php

    class Coins
    {
        function makeCoins($input)
        {
            $coins_arr = ['quarters' => 0, 'dimes' => 0, 'nickels' => 0, 'pennies' => 0];

            $quarters = intval($input / 25);
            $quarters_val = $quarters * 25;

            $dimes = intval(($input - $quarters_val ) / 10);
            $dimes_val = $dimes * 10;

            $nickels = intval(($input - $quarters_val - $dimes_val) / 5);
            $nickels_val = $nickels * 5;

            $pennies = intval($input - $quarters_val - $dimes_val - $nickels_val);

            $coins_arr['quarters'] = $quarters;
            $coins_arr['dimes'] = $dimes;
            $coins_arr['nickels'] = $nickels;
            $coins_arr['pennies'] = $pennies;

            return $coins_arr;
        }
    }
?>
