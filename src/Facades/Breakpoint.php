<?php

namespace Huaiyang\Breakpoint\Facades;

use Illuminate\Support\Facades\Facade;

class Breakpoint extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'breakpoint';
    }
}