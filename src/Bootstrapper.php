<?php

/**
 * Bootstrap management class
 *
 * Manages the plugin bootstrap process.
 *
 * @package Somedevtips Test Js
 * @since 1.0.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace Somedevtips\TestJs;

use Somedevtips\TestJs\Tester\JsLoader;

class Bootstrapper
{
    /**
     * @var array
     */
    private $modules;

    /**
     * @var string
     */
    private string $pluginUrl;

    public function __construct(string $pluginUrl)
    {
        $this->modules = [];
        $this->pluginUrl = $pluginUrl;
    }

    /**
     * Boostraps the plugin.
     *
     * Checks the php version, loads and bootstraps modules.
     *
     * @since  1.0.0
     * @return void
     */
    public function bootstrap(): void
    {
        $this->loadModules();

        $bootstrappables = array_filter(
            $this->modules,
            static function (object $module): bool {
                return $module instanceof BootstrappableInterface;
            }
        );

        foreach ($bootstrappables as $module) {
            $module->bootstrap();
        }
    }

    /**
     * Loads all plugin modules.
     *
     * @since  1.0.0
     * @return void
     */
    protected function loadModules(): void
    {
        $this->modules[JsLoader::class] = new JsLoader($this->pluginUrl);
    }
}
