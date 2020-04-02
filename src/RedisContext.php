<?php

namespace Src\Redis;

use Src\App;
use Src\Core\Context;

class RedisContext extends Context
{
    /**
     * @var array Coroutine context
     */
    protected $context;

    public static function __callStatic($method, $arguments)
    {
        if ($context_redis = App::get('context_redis')) {
            return $context_redis->$method(...$arguments);
        }
    }
}
