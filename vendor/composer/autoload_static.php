<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit197ddf75cb81310ddcb43ad7f0822cf0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit197ddf75cb81310ddcb43ad7f0822cf0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit197ddf75cb81310ddcb43ad7f0822cf0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit197ddf75cb81310ddcb43ad7f0822cf0::$classMap;

        }, null, ClassLoader::class);
    }
}
