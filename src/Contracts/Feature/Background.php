<?php
namespace Mikkel\PHPUnitGherkin\Contracts\Feature;

interface Background
{
	public function given(string $precondition): Background\Given;
}
