<?php

declare(strict_types=1);
class Functions
{

    public function sum(int $a, int $b): int
    {
        return ($a + $b);
    }

    public function multiply(int $a, int $b)
    {
        return ($a * $b);
    }

    public function sumOfFirstNnaturalNumbers(int $n): int
    {
        return ((($n) / 2) * ($n + 1));
    }
}
