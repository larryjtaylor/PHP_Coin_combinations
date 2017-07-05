  # Coin Combinations PHP
  ##### _In which an amount shall be given in small coinage, July 5, 2017_

  #### By Larry Taylor and Max Scher

  ## Description

  This web application allows users to input a number of cents, and the program will give the smallest number of each coin type needed to make up that amount.  This is a practice in using Behavior Driven Development PHP with the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

  ## Setup

  * Open GitHub site on your browser: https://github.com/Larryjtaylor/PHP_Coin_combinations
  * Select the dropdown (green box) "Clone or download"
  * Copy the link for the GitHub repository
  * Open Terminal on your computer
  * In Terminal, perform the following steps:
      * type 'cd desktop' and press enter
      * type 'git clone' then copy the repository link and press enter
      * type 'cd php-ping-pong' to access the document root (project folder) on your computer
      * type 'composer install' to download dependencies (Silex & Twig)
      * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
  * Open browser and type 'localhost:8000' to view Coin Combinatins.


  ## Specifications
  * It will return the inputted amount in pennies.
    * Input: $0.43
    * Output: 43 pennies
  * It will return the inputted number in nickels and pennies.
    * Input: $0.62
    * Output: 12 nickels and 2 pennies
  * It will return the inputted number in dimes, nickels and pennies.
    * Input: $0.67
    * Output: 6 dimes, 1 nickel and 2 pennies
  * It will return the inputted number in quarters, dimes, nickels and pennies.
    * Input: $0.93
    * Ooutput: 3 quarters, 1 dime, 1 nickel, 3 pennies

  ## Technologies Used

  PHP, Silex, Twig, PHPUnit, CSS, HTML5

  ### License
  This software is licensed under the MIT license.

  Copyright &copy; 2017 **_Larry Taylor, Max Scher_**
