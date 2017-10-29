<?php
/**
 * This file is part of Notadd.
 *
 * @author        TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime      2017-10-19 11:41
 */
namespace Notadd\Foundation\Testing;

use Exception;
//use Laravel\Dusk\Console\ComponentCommand;
//use Laravel\Dusk\Console\DuskCommand;
//use Laravel\Dusk\Console\InstallCommand;
//use Laravel\Dusk\Console\MakeCommand;
//use Laravel\Dusk\Console\PageCommand;
use Notadd\Foundation\Http\Abstracts\ServiceProvider;

/**
 * Class TestingServiceProvider.
 */
class TestingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
//        $this->app->make('router')->get('/_dusk/login/{userId}/{guard?}', [
//            'middleware' => 'web',
//            'uses'       => 'Laravel\Dusk\Http\Controllers\UserController@login',
//        ]);
//        $this->app->make('router')->get('/_dusk/logout/{guard?}', [
//            'middleware' => 'web',
//            'uses'       => 'Laravel\Dusk\Http\Controllers\UserController@logout',
//        ]);
//        $this->app->make('router')->get('/_dusk/user/{guard?}', [
//            'middleware' => 'web',
//            'uses'       => 'Laravel\Dusk\Http\Controllers\UserController@user',
//        ]);
    }

    /**
     * Register any package services.
     *
     * @throws Exception
     */
    public function register()
    {
//        if ($this->app->runningInConsole()) {
//            $this->commands([
//                InstallCommand::class,
//                DuskCommand::class,
//                MakeCommand::class,
//                PageCommand::class,
//                ComponentCommand::class,
//            ]);
//        }
    }
}
