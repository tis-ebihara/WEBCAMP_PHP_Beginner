<?php
class FizzBuzz
{
    private int $max;

    public function setMax($i)
    {
        $this->max = $i;
    }

    public function exec()
    {
        for($i = 1; $i <= $this->max; ++$i) {
            if (($i % 15) === 0) {
                echo "Fizz Buzz \n";
            } else if (($i % 5) === 0) {
                echo "Buzz \n";
            } else if (($i % 3) === 0) {
                echo "Fizz \n";
            } else {
                echo "{$i} \n";
            }
        }
    }
}

$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();