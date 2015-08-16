<?php
class Factorial
{
    public function Fact($n)
    {
        $fact = 1;
        for($i=2; $i<=$n; $i++)
        {
            $fact*=$i;
        }
        return $fact;
    }
}

$new = new Factorial();

echo $new ->Fact(5);

