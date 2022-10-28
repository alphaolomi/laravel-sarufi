<?php

namespace Alphaolomi\LaravelSarufi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Alphaolomi\Laravel\SarufiServiceProvider;

class TestCase extends Orchestra
{    

    protected function getPackageProviders($app)
    {
        return [SarufiServiceProvider::class];
    }

    
}
