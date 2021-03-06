<?php
/**
 * @package    Grav\Framework\Cache
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Cache\Adapter;

use Grav\Framework\Cache\AbstractCache;

/**
 * Cache class for PSR-16 compatible "Simple Cache" implementation using session backend.
 *
 * @package Grav\Framework\Cache
 */
class SessionCache extends AbstractCache
{
    const VALUE = 0;
    const LIFETIME = 1;

    public function doGet($key, $miss)
    {
        $stored = $this->doGetStored($key);

        return $stored ? $stored[self::VALUE] : $miss;
    }

    public function doSet($key, $value, $ttl)
    {
        $_SESSION[$this->getNamespace()][$key] = [self::VALUE => $value, self::LIFETIME => time() + $ttl];

        return true;
    }

    public function doDelete($key)
    {
        unset($_SESSION[$this->getNamespace()][$key]);

        return true;
    }

    public function doClear()
    {
        $_SESSION[$this->getNamespace()] = [];

        return true;
    }

    public function doHas($key)
    {
        return $this->doGetStored($key) !== null;
    }

    public function getNamespace()
    {
        return 'cache-' . parent::getNamespace();
    }

    protected function doGetStored($key)
    {
        $stored = isset($_SESSION[$this->getNamespace()][$key]) ? $_SESSION[$this->getNamespace()][$key] : null;

        if ($stored && $stored[self::LIFETIME] < time()) {
            unset($_SESSION[$this->getNamespace()][$key]);
            $stored = null;
        }

        return $stored ?: null;
    }
}
