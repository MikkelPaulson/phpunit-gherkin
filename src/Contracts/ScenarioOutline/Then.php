<?php
namespace Mikkel\PHPUnitGherkin\Contracts\ScenarioOutline;

interface Then
{
	public function and(string $assertion): Then;
	public function but(string $assertion): Then;
	public function examples(array $title, array ...$cases): void;
}
