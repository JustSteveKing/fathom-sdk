<?php

namespace JustSteveKing\Fathom;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JustSteveKing\Fathom\Fathom
 */
class FathomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fathom-sdk';
    }
}
