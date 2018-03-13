<?php
namespace Mikkel\PHPUnitGherkin\Contracts\ScenarioOutline;

interface When
{
	public function and(string $condition): When;
	public function but(string $condition): When;
	public function then(string $assertion): Then;
}
