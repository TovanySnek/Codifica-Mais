<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b382e1f80f51971e68055f5de5d2bf8
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b382e1f80f51971e68055f5de5d2bf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b382e1f80f51971e68055f5de5d2bf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b382e1f80f51971e68055f5de5d2bf8::$classMap;

        }, null, ClassLoader::class);
    }
}
