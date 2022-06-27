<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66a456271a3c6e7df53a39ec5b309c82
{
    public static $files = array (
        'c069eb1f6651ad64384e946906e9c906' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit66a456271a3c6e7df53a39ec5b309c82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66a456271a3c6e7df53a39ec5b309c82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66a456271a3c6e7df53a39ec5b309c82::$classMap;

        }, null, ClassLoader::class);
    }
}
