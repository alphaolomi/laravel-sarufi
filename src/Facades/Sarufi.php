<?php

namespace Alphaolomi\Laravel\Sarufi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alphaolomi\Laravel\Sarufi\Sarufi
 *
 * @method static createBot(string $name, null|string $description = null, string $industry = "general", $flow = [], $intents = [], bool $visibleOnCommunity = false)
 * @method static createFromFile($metadata = null, $intents = null, $flow = null)
 * @method static updateBot($id, $name, $industry, $description, $intents, $flow, $visibleOnCommunit)
 * @method static updateFromFile( $id, $intents, $flow, $metadata)
 * @method static getBot($id)
 * @method static chat(int $botId, string $chatId, string $message = "Hello", string $messageType = "text", string $channel = "general")
 * @method static deleteBot($id)
 */
class Sarufi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sarufi';
    }
}
