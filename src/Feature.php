<?php
namespace Mikkel\PHPUnitGherkin;

class Feature implements Contracts\Feature
{
	private $description;

	public function __construct(string ...$description)
	{
		$this->description = implode("\n", $description);
	}

	public function __toString()
	{
		return $this->description;
	}

	public function background(): Contracts\Feature\Background
	{
		return new Feature\Background($this);
	}
}
