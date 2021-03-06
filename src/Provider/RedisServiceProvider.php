<?php

namespace Src\Redis\Provider;

use Src\Redis\RedisContext;
use Src\Redis\RedisManager;
use Src\Core\AbstractProvider;

class RedisServiceProvider extends AbstractProvider
{
    public function register()
    {
        $this->app->set('php_redis', function () {
            $config = $this->app->get('config')->get('database.redis');

            return new RedisManager($config);
        });
        $this->app->set('context_redis', function () {
            return new RedisContext;
        });
    }
}