<?php
namespace Mikkel\PHPUnitGherkin\Contracts;

interface Feature
{
	public function background(): Feature\Background;
}
