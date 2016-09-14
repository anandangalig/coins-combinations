<?php
    class Coins{
        private $cents;
        private $quarters;
        private $dimes;
        private $nickels;
        private $pennies;
        private $change;


        function __construct($cents)
        {
            $this->cents = $cents;
        }

        function getChange()
        {
            return $this->change;
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
            if ($cents >= 10 && $cents < 20)
            {
                $cents -= 10;
                $this->dimes = "1 dime";
            }
            else if ($cents >=20 && $cents < 25)
            {
                $cents -= 20;
                $this->dimes = "2 dimes";
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
            else if ($cents < 5 && $cents != 0)
            {
                $this->pennies = $cents . " pennies";
            }

            $this->change = $this->quarters . " " . $this->dimes . " " . $this->nickels . " " .$this->pennies;
        }
    }
 ?>
