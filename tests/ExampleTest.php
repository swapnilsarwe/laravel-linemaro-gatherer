<?php

namespace Codeat3\LaravelLinemaroGatherer\Tests;

use Orchestra\Testbench\TestCase;
use Codeat3\LaravelLinemaroGatherer\LaravelLinemaroGathererServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelLinemaroGathererServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
