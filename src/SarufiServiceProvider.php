<?php

namespace Alphaolomi\Laravel\Sarufi;

use Alphaolomi\Sarufi\Sarufi;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
        $this->app->singleton('sarufi', function () {
            $username = config('sarufi.username', '');
            $password = config('sarufi.password', '');
            if (empty($username)) {
                throw new \RuntimeException('Username is missing: add SARUFI_USERNAME to you .env file');
            }
            if (empty($password)) {
                throw new \RuntimeException('Password is missing: add SARUFI_PASSWORD to you .env file');
            }

            return new Sarufi(
                username: $username,
                password: $password
            );
        });
    }
}
