<?php
namespace Mikkel\PHPUnitGherkin\Contracts\Scenario;

interface Then
{
	public function and(string $assertion): Then;
	public function but(string $assertion): Then;
}
