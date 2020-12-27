<?php

namespace Maxtc\ConfigWriter\Tests;

use Orchestra\Testbench\TestCase;
use Maxtc\ConfigWriter\ConfigWriterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ConfigWriterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
