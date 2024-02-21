<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit400ecf8054a83b71e1ca0f4e515c78f7
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit400ecf8054a83b71e1ca0f4e515c78f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit400ecf8054a83b71e1ca0f4e515c78f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit400ecf8054a83b71e1ca0f4e515c78f7::$classMap;

        }, null, ClassLoader::class);
    }
}
