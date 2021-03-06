<?php

namespace Maximaster\Tools\Finder\EventHandlers\Bitrix\Highloadblock\Highloadblock;

use Maximaster\Tools\Finder\HlBlock;
use Maximaster\Tools\Events\BaseEvent;

class OnAdd extends BaseEvent
{
    public static function invalidateCache()
    {
        (new HlBlock())->invalidateCache();
    }
}