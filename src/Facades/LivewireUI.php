<?php

namespace Luckykenlin\LivewireUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Luckykenlin\LivewireUI\LivewireUI
 */
class LivewireUI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Luckykenlin\LivewireUI\LivewireUI::class;
    }
}
