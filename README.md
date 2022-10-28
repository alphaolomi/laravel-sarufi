# Sarufi for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alphaolomi/laravel-sarufi.svg?style=flat-square)](https://packagist.org/packages/alphaolomi/laravel-sarufi)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/alphaolomi/laravel-sarufi/run-tests?label=tests)](https://github.com/alphaolomi/laravel-sarufi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/alphaolomi/laravel-sarufi/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/alphaolomi/laravel-sarufi/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/alphaolomi/laravel-sarufi.svg?style=flat-square)](https://packagist.org/packages/alphaolomi/laravel-sarufi)

## Installation

You can install the package via composer:

```bash
composer require alphaolomi/laravel-sarufi
```


```bash
php artisan vendor:publish --tag="laravel-sarufi-config"
```

## Configuration 

in your `.env` file add

```ini
SARUFI_USERNAME="your_nice_username"
SARUFI_PASSWORD="your_nice_password"
```

## Usage

```php
use Alphaolomi\Laravel\Facades\Sarufi;
$bot = Sarufi::createBot([
    "name" => "YOUR AWESOME BOT NAME",
    "description" => "PUT DESCRIPTION HERE",
    "industry" => "YOUR BOT INDUSTRY",
    "intents" => [],
    "flows" => [],
]);
print_r($bot1);

// OR
// From files with intent and metadata/
// Assume you have you file in storage/data/intents.yaml example
$bot2 Sarufi::createFromFile(
    intents: storage_path('data/intents.yaml'),
    flow:  storage_path('data/flow.yaml'),
    metadata: storage_path('data/metadata.yaml'
);
print_r($bot);
```

##  API avalable

- `createBot(string $name, null|string $description = null, string $industry = "general", $flow = [], $intents = [], bool $visibleOnCommunity = false)`
- `createFromFile($metadata = null, $intents = null, $flow = null)`
- `updateBot($id, $name, $industry, $description, $intents, $flow, $visibleOnCommunity)`
- `updateFromFile( $id, $intents, $flow, $metadata)`
- `getBot($id)`
- `chat(int $botId, string $chatId, string $message = "Hello", string $messageType = "text", string $channel = "general")`
- `deleteBot($id)`

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alpha Olomi](https://github.com/alphaolomi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
