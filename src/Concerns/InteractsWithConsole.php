<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-10-09 18:44
 */
namespace Notadd\Foundation\Testing\Concerns;

use Illuminate\Contracts\Console\Kernel;

/**
 * Trait InteractsWithConsole.
 */
trait InteractsWithConsole
{
    /**
     * Call artisan command and return code.
     *
     * @param string  $command
     * @param array  $parameters
     * @return int
     */
    public function artisan($command, $parameters = [])
    {
        return $this->app[Kernel::class]->call($command, $parameters);
    }
}
