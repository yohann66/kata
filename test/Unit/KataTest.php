<?php

namespace Kata\test\Unit;

use Kata\src\Kata;
use PHPUnit\Framework\TestCase;

/**
 * @package Kata\test\Unit
 */
class KataTest extends TestCase
{
	public function testKata()
	{
		$items = $this->getItems();

		$kata = new Kata();


		// dumb greedy thief
		$bestCombination = $kata->greedyThief($items, 10);

		//No test this time :(

	}

	/**
	 * @return array
	 */
	private function getItems()
	{
		return [
			[
				'weight' => 2,
				'price' => 3
			],[
				'weight' => 4,
				'price' => 5
			],[
				'weight' => 1,
				'price' => 2
			],[
				'weight' => 4,
				'price' => 3
			],[
				'weight' => 2,
				'price' => 3
			],[
				'weight' => 6,
				'price' => 5
			],
		];
	}
}
