<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8f7237e294c7b09584677a1e4e5a044
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Somedevtips\\TestJs\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Somedevtips\\TestJs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8f7237e294c7b09584677a1e4e5a044::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8f7237e294c7b09584677a1e4e5a044::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8f7237e294c7b09584677a1e4e5a044::$classMap;

        }, null, ClassLoader::class);
    }
}