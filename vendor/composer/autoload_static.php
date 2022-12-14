<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a6163aa03e3cb21969d290066ad31b8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CBD\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CBD\\' => 
        array (
            0 => __DIR__ . '/../..' . '/theme',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a6163aa03e3cb21969d290066ad31b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a6163aa03e3cb21969d290066ad31b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a6163aa03e3cb21969d290066ad31b8::$classMap;

        }, null, ClassLoader::class);
    }
}
