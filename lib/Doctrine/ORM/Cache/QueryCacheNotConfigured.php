<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

final class QueryCacheNotConfigured extends \Exception implements CacheException
{
    public static function create() : self
    {
        return new self('Query Cache is not configured.');
    }
}
