<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use SearchInsertPosition\Solution;

/**
 * Class SolutionTest
 *
 * @package SearchInsertPosition
 */
class SolutionTest extends TestCase
{
    /** @var array<int> */
    protected $nums = [1, 3, 5, 6];
    /** @var array<int> */
    protected $target = array(5, 2, 7, 0);
    /** @var array<int> */
    protected $expected = array(2, 1, 4, 0);

    /**
     * @return void
     */
    public function testSearchInsert(): void
    {
        $solution = new Solution();

        self::assertEquals($this->expected[0],
            $solution->searchInsert(
                $this->nums,
                $this->target[0]
            )
        );

        self::assertEquals($this->expected[1],
            $solution->searchInsert(
                $this->nums,
                $this->target[1]
            )
        );

        self::assertEquals($this->expected[2],
            $solution->searchInsert(
                $this->nums,
                $this->target[2]
            )
        );

        self::assertEquals($this->expected[3],
            $solution->searchInsert(
                $this->nums,
                $this->target[3]
            )
        );
    }
}
