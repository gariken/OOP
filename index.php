<?php

class Factorial{
    public function Result($n){
        $fact = 1;
        for($i = 2; $i<=$n; $i++)
        {
            $fact*=$i;
        }
        return $fact;
    }
}

$Fact = new Factorial();

echo $Fact -> Result(5);