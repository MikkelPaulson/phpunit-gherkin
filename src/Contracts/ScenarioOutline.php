<?php
namespace Mikkel\PHPUnitGherkin\Contracts;

interface ScenarioOutline
{
	public function given(string $precondition): ScenarioOutline\Given;
}
