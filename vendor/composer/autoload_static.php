<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f4f984a16a0d75dac0631a1d06ebb6f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'ISL\\' => 4,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ISL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f4f984a16a0d75dac0631a1d06ebb6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f4f984a16a0d75dac0631a1d06ebb6f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f4f984a16a0d75dac0631a1d06ebb6f::$classMap;

        }, null, ClassLoader::class);
    }
}