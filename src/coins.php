<?php
    class Coins{
        public $cents;
        public $quarters;
        public $dimes;
        public $nickels;
        public $pennies;

        function __construct($cents)
        {
            $this->cents = $cents;
        }

        function getCents()
        {
            return $this->cents;
        }
        function setCents($new_cents)
        {
            $this->cents = (string) $new_cents;
        }

        function change_calculator()
        {
            $cents = $this->cents;
            //======================QUARTERS===============================
            $calc_quarters = ($cents / 25);
            if (($calc_quarters) < 2 && ($calc_quarters) >= 1)
            {
                $this->quarters = "1 quarter";
                $cents -= 25;
            }
            else if ($calc_quarters >= 2)
            {
                $cents -= (floor($calc_quarters) * 25);
                $this->quarters = floor($calc_quarters) . " quarters";
            }
            //======================DIMES===============================
            if ($cents >= 10 && $cents < 25)
            {
                $cents -= 10;
                $this->dimes = "1 dime";
            }
            //======================NICKEL===============================
            if ($cents >= 5 && $cents <10 )
            {
                $cents -= 5;
                $this->nickels = "1 nickel";
            }
            //======================PENNIES===============================
            if ($cents / 1 == 1)
            {
                $this->pennies = "1 penny";
            }
            else if ($cents < 5)
            {
                $this->pennies = $cents . " pennies";
            }




        }
    }
 ?>
