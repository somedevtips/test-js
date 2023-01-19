<?php

/**
 * Bootstrap interface
 *
 * Interface implemented by all classes involved in plugin boostrap.
 *
 * @package Somedevtips Test Js
 * @since 1.0.0
 */

# -*- coding: utf-8 -*-
declare(strict_types=1);

namespace Somedevtips\TestJs;

interface BootstrappableInterface
{
    public function bootstrap(): void;
}
