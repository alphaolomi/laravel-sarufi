# Changelog

All notable changes to `laravel-sarufi` will be documented in this file.

## v0.0.1 - 2022-10-29

### Sarufi for Laravel

#### Installation

You can install the package via composer:

```bash
composer require alphaolomi/laravel-sarufi

```
```bash
php artisan vendor:publish --tag="sarufi-config"

```
#### Configuration

in your `.env` file add

```ini
SARUFI_USERNAME="your_nice_username"
SARUFI_PASSWORD="your_nice_password"

```
#### Usage

```php
use Alphaolomi\Laravel\Sarufi\Facades\Sarufi;
$bot = Sarufi::createBot(
    name: "Danny bot",
    description: "PUT DESCRIPTION HERE",
    industry: "YOUR BOT INDUSTRY",
    intents: [],
    flows: []
);

print_r($bot1);
// Output
// => [
//      "intents" => [],
//      "user_id" => 54,
//      "description" => "PUT DESCRIPTION HERE",
//      "industry" => "YOUR BOT INDUSTRY",
//      "created_at" => "2022-10-20T14:24:32.862859",
//      "name" => "Danny bot",
//      "flows" => [],
//      "id" => 81,
//      "model_name" => "models/24bea90e2ad6f9d279d4fa86795c8ea0.pkl",
//      "visible_on_community" => false,
//      "updated_at" => "2022-10-20T14:24:32.862872",
//    ]


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
#### API avalable

- `createBot(string $name, null|string $description = null, string $industry = "general", $flow = [], $intents = [], bool $visibleOnCommunity = false)`
- `createFromFile($metadata = null, $intents = null, $flow = null)`
- `updateBot($id, $name, $industry, $description, $intents, $flow, $visibleOnCommunity)`
- `updateFromFile( $id, $intents, $flow, $metadata)`
- `getBot($id)`
- `chat(int $botId, string $chatId, string $message = "Hello", string $messageType = "text", string $channel = "general")`
- `deleteBot($id)`
