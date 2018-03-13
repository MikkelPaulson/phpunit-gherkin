PHPUnit-Gherkin
===============

A fluent Gherkin interface for PHPUnit. This allows you to integrate a Gherkin-
like fluent syntax into existing PHPUnit tests.

Syntax
------

To allow a class to access the PHPUnitGherkin interface, simply
`use Mikkel\PHPUnitGherkin\GherkinTest;`. This exposes three new methods that
act as entry points for the fluent interface:

* `feature()`
* `scenario()`
* `scenarioOutline()`

Example
-------

```php
<?php
namespace Tests;

use Tests\ExampleTestDefinition;
use Mikkel\PHPUnitGherkin\GherkinTest;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    use GherkinTest;
    use ExampleTestDefinition;

    public function setUp()
    {
        $this
            ->feature(
                'Multiple site support',
                'As a Mephisto site owner',
                'I want to host blogs for different people',
                'In order to make gigantic piles of money'
            )
            ->background()
                ->given('a global administrator named "Greg"')
                ->and('a blog named "Greg\'s anti-tax rants"')
                ->and('a customer named "Dr. Bill"')
                ->and('a blog named "Expensive Therapy" owned by "Dr. Bill"');
    }

    public function testDrBillPostsToHisOwnBlog()
    {
        $this
            ->scenario('Dr. Bill posts to his own blog')
            ->given('I am logged in as Dr. Bill')
            ->when('I try to post to "Expensive Therapy"')
            ->then('I should see "Your article was published."');
    }

    public function testDrBillTriesToPostToSomebodyElsesBlogAndFails()
    {
        $this
            ->scenario('Dr. Bill tries to post to somebody else\'s blog, and fails')
            ->given('I am logged in as Dr. Bill')
            ->when('I try to post to "Greg\'s anti-tax rants"')
            ->then('I should see "Hey! That\'s not your blog!"');
    }

    public function testGregPostsToAClientsBlog()
    {
        $this
            ->scenario('Greg posts to a client\'s blog')
            ->given('I am logged in as Greg')
            ->when('I try to post to "Expensive Therapy"')
            ->then('I should see "Your article was published."');
    }
}
```
