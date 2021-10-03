<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7476b4b03c2623e9ac1eb169a02d95e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7476b4b03c2623e9ac1eb169a02d95e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7476b4b03c2623e9ac1eb169a02d95e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc7476b4b03c2623e9ac1eb169a02d95e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc7476b4b03c2623e9ac1eb169a02d95e::$classMap;

        }, null, ClassLoader::class);
    }
}