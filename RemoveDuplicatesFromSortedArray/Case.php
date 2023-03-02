<?php

declare(strict_types=1);

use RemoveDuplicatesFromSortedArray\Solution;

require_once 'Solution.php';

$nums = [0,0,1,1,1,2,2,3,3,4];

$solution = new Solution();

echo $solution->removeDuplicates($nums);

echo '</br>';

print_r($nums);