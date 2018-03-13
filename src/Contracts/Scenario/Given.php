<?php
namespace Mikkel\PHPUnitGherkin\Contracts\Scenario;

interface Given
{
	public function and(string $precondition): Given;
	public function but(string $precondition): Given;
	public function when(string $condition): When;
}
