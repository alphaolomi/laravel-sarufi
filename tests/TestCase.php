<?php

namespace Alphaolomi\Laravel\Sarufi\Tests;

use Alphaolomi\Laravel\Sarufi\SarufiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [SarufiServiceProvider::class];
    }
}
