<?php

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace Somedevtips\TestJs\Tester;

use Somedevtips\TestJs\BootstrappableInterface;

class JsLoader implements BootstrappableInterface {
    /**
     * @var string
     */
    private string $pluginUrl;

    public function __construct(string $pluginUrl)
    {
        $this->pluginUrl = $pluginUrl;
    }

    public function bootstrap(): void
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue() {
        wp_enqueue_script( 'test-js', $this->pluginUrl . 'assets/main.js', [], '1.0.0', true );
    }
}