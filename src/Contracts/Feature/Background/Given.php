<?php
namespace Mikkel\PHPUnitGherkin\Feature\Background;

interface Given
{
	public function and(string $precondition): Given;
	public function but(string $precondition): Given;
}
