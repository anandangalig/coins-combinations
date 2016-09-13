<?php
    require_once "src/coins.php";

    class CoinsTest extends PHPUnit_Framework_TestCase
    {
        function test_one_cent()
        {
            //Arrange
            $input = 1;
            $test_Coins = new Coins($input);

            //Act
            $test_Coins->change_calculator();
            $result = $test_Coins->pennies;
            $desired_result = "1 penny";

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_3_cents()
        {
            //Arrange
            $input = 3;
            $test_Coins = new Coins($input);

            //Act
            $test_Coins->change_calculator();
            $result = $test_Coins->pennies;
            $desired_result = "3 pennies";

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_5_cents()
        {
            //Arrange
            $input = 5;
            $test_Coins = new Coins($input);

            //Act
            $test_Coins->change_calculator();
            $result = $test_Coins->nickels;
            $desired_result = "1 nickel";

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_10_cents()
        {
            //Arrange
            $input = 10;
            $test_Coins = new Coins($input);

            //Act
            $test_Coins->change_calculator();
            $result = $test_Coins->dimes;
            $desired_result = "1 dime";

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        function test_25_cents()
        {
            //Arrange
            $input = 25;
            $test_Coins = new Coins($input);

            //Act
            $test_Coins->change_calculator();
            $result = $test_Coins->quarters;
            $desired_result = "1 quarter";

            //Assert
            $this->assertEquals($desired_result, $result);
        }

        // function test_41_cents()
        // {
        //     //Arrange
        //     $input = 41;
        //     $test_Coins = new Coins($input);
        //
        //     //Act
        //     $test_Coins->change_calculator();
        //     $result = $test_Coins->quarters;
        //     $desired_result = "1 quarter 1 dime 1 nickel 1 penny";
        //
        //     //Assert
        //     $this->assertEquals($desired_result, $result);
        // }
        //
        // function test_66_cents()
        // {
        //     //Arrange
        //     $input = 66;
        //     $test_Coins = new Coins($input);
        //
        //     //Act
        //     $test_Coins->change_calculator();
        //     $result = $test_Coins->quarters . " " . $test_Coins->pennies;
        //     $desired_result = "2 quarters 1 dime 1 nickel 1 penny";
        //
        //     //Assert
        //     $this->assertEquals($desired_result, $result);
        // }

    }
 ?>
