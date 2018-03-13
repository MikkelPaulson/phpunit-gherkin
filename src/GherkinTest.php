<?php

namespace Mikkel\PHPUnitGherkin;

trait GherkinTest
{
	private $gherkinFeature;

	protected function feature(string ...$description): Contracts\Feature
	{
		$this->gherkinFeature = new Feature(...$description);
		return $this->gherkinFeature;
	}

	protected function scenario(string ...$description): Contracts\Scenario
	{
		return new Scenario($this->gherkinFeature, ...$description);
	}

	protected function scenarioOutline(string ...$description): Contracts\ScenarioOutline
	{
		return new ScenarioOutline($this->gherkinFeature, ...$description);
	}
}
