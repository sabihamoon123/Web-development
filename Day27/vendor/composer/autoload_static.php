<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f9ac86c0b415a6b93530ab65861f46f
{
    public static $files = array (
        '2dfe26448de6304d3f749f933b402199' => __DIR__ . '/../..' . '/app/helpers/helper.php',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f9ac86c0b415a6b93530ab65861f46f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f9ac86c0b415a6b93530ab65861f46f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f9ac86c0b415a6b93530ab65861f46f::$classMap;

        }, null, ClassLoader::class);
    }
}