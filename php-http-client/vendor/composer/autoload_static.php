<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit185e187c1b67c596d6a5b844e3e08bc0
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SendGrid\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SendGrid\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit185e187c1b67c596d6a5b844e3e08bc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit185e187c1b67c596d6a5b844e3e08bc0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit185e187c1b67c596d6a5b844e3e08bc0::$classMap;

        }, null, ClassLoader::class);
    }
}
