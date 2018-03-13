<?php
namespace Mikkel\PHPUnitGherkin\Contracts;

interface Scenario
{
	public function given(string $precondition): Scenario\Given;
}
