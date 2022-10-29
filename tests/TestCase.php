<?php

namespace Alphaolomi\Laravel\Sarufi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Alphaolomi\Laravel\Sarufi\SarufiServiceProvider;

class TestCase extends Orchestra
{    

    protected function getPackageProviders($app)
    {
        return [SarufiServiceProvider::class];
    }

    
}
