<?php

namespace Iqmal\LaravelLookup\Tests;

use Orchestra\Testbench\TestCase;
use Iqmal\LaravelLookup\LaravelLookupServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelLookupServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
