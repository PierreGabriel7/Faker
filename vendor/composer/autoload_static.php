<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit694aeae8a9a8b1256e6465cbb8a49d6c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit694aeae8a9a8b1256e6465cbb8a49d6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit694aeae8a9a8b1256e6465cbb8a49d6c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit694aeae8a9a8b1256e6465cbb8a49d6c::$classMap;

        }, null, ClassLoader::class);
    }
}