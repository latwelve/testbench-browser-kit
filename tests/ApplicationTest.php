<?php

namespace Orchestra\Testbench\BrowserKit\Tests;

use Orchestra\Testbench\BrowserKit\TestCase;

class ApplicationTest extends TestCase
{
    /** @test */
    public function itUsesTestingAsEnvironment()
    {
        $this->assertEquals('testing', $this->app->environment());
    }
}
