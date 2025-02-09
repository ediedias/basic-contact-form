<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15c5669d3d1dfa7b70ed902762937e13
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit15c5669d3d1dfa7b70ed902762937e13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15c5669d3d1dfa7b70ed902762937e13::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15c5669d3d1dfa7b70ed902762937e13::$classMap;

        }, null, ClassLoader::class);
    }
}
