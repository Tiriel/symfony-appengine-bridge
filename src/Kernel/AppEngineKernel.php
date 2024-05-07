<?php

namespace Tiriel\AppengineBridge\Kernel;

use Symfony\Component\HttpKernel\Kernel;

abstract class AppEngineKernel extends Kernel
{
    public function getCacheDir(): string
    {
        if ($this->isAppEngine()) {
            return sys_get_temp_dir().'/var/cache';
        }

        return parent::getCacheDir();
    }

    public function getLogDir(): string
    {
        if ($this->isAppEngine()) {
            return sys_get_temp_dir().'/var/log';
        }

        return parent::getLogDir();
    }

    public function isAppEngine(): bool
    {
        return getenv('GAE_APPLICATION') !== false;
    }
}
