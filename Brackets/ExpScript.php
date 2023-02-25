<?php

use Brackets\Solution;

require_once 'Solution.php';
//use Brackets\Solution as SolutionClass;

//declare(strict_types=1);



$solution = new Solution();

$test1 = '()';

echo $solution->isValid($test1);