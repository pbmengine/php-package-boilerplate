<?php

namespace Pbmengine\Package;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pbmengine\Package\PackageClass
 */
class PackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'package';
    }
}
