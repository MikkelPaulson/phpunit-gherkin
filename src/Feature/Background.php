<?php
namespace Mikkel\PHPUnitGherkin\Feature;

use Mikkel\PHPUnitGherkin\Contracts;

class Background implements Contracts\Feature\Background
{
	private $feature;

	public function __construct(Contracts\Feature $feature)
	{
		$this->feature = $feature;
	}
}
