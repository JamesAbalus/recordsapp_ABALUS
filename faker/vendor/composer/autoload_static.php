<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15c8999aa3c23742b5612ae1d735a992
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit15c8999aa3c23742b5612ae1d735a992::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15c8999aa3c23742b5612ae1d735a992::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15c8999aa3c23742b5612ae1d735a992::$classMap;

        }, null, ClassLoader::class);
    }
}