<?php

/*
 * This file is part of the Laravel TruliooCustomerSdk package.
 *
 * (c) Olushola O. - GeekyGeeky <olushola.op@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GeekyGeeky\TruliooCustomerSdk\Facades;

use Illuminate\Support\Facades\Facade;

class TruliooCustomerSdk extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-trulioo-customer-sdk';
    }
}