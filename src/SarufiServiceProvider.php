<?php

namespace Alphaolomi\Laravel\Sarufi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alphaolomi\Sarufi\Sarufi;

class SarufiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*         
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sarufi')
            ->hasConfigFile();
    }

    // public function registeringPackage()
    // {
    // }

    public function packageRegistered()
    {
        $username = config('sarufi.username', "");
        $password = config('sarufi.password', "");
        if (empty($username)) {
            throw new \RuntimeException("Username is missing: add SARUDI_USERNAME to you .env file");
        }
        if (empty($password)) {
            throw new \RuntimeException("Password is missing: add SARUDI_PASSWORD to you .env file");
        }

        $this->app->bind('sarufi', function () use ($username, $password) {
            return new Sarufi(
                username: $username,
                password: $password
            );
        });
    }
}
