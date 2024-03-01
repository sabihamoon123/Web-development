<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb58a552747e015e72032f4489f929483
{
    public static $files = array (
        'b765722ab14aef674799f651213bb7db' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb58a552747e015e72032f4489f929483::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb58a552747e015e72032f4489f929483::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb58a552747e015e72032f4489f929483::$classMap;

        }, null, ClassLoader::class);
    }
}