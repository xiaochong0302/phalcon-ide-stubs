<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Mvc;

use Phalcon\Di\Injectable;

/**
 * Phalcon\Mvc\Component
 *
 * This class can be used to provide user components easy access to services
 * in the application
 */
class Component extends Injectable
{

    /**
     * Phalcon\Mvc\Component constructor
     */
    public function __construct()
    {
    }

    /**
     * Gets the license info
     *
     * @return array
     */
    public function getLicenseInfo(): array
    {
    }

}
