<?php
/**
 * Created by PhpStorm.
 * User: amopi
 * Date: 2015-12-04
 * Time: 20:35
 */

namespace Amopi\Mlib\Logging;

use Monolog\Handler\HandlerInterface;

/**
 * Trait MLoggingHandlerTrait
 *
 * This trait is to be used on
 *
 * @package Amopi\Mlib\Logging
 */
trait MLoggingHandlerTrait
{
    public function install()
    {
        if ($this instanceof HandlerInterface) {
            MLogging::addHandler($this, static::class);
            
            return $this;
        }
        else {
            throw new \LogicException("Installed logging handler is not of correct type! class = " . static::class);
        }
    }
}
