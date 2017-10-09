<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-10-09 18:45
 */
namespace Notadd\Foundation\Testing\Concerns;

/**
 * Trait InteractsWithContainer.
 */
trait InteractsWithContainer
{
    /**
     * Register an instance of an object in the container.
     *
     * @param string $abstract
     * @param object $instance
     *
     * @return object
     */
    protected function swap($abstract, $instance)
    {
        return $this->instance($abstract, $instance);
    }

    /**
     * Register an instance of an object in the container.
     *
     * @param string $abstract
     * @param object $instance
     *
     * @return object
     */
    protected function instance($abstract, $instance)
    {
        $this->app->instance($abstract, $instance);

        return $instance;
    }
}
