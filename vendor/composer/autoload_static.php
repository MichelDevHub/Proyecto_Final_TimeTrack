<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe45a3a51f8d5c8406d2c1fda279b66a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Migue\\ProyectoFinalTimetrack\\Models\\' => 36,
            'Migue\\ProyectoFinalTimetrack\\Helpers\\' => 37,
            'Migue\\ProyectoFinalTimetrack\\Entities\\' => 38,
            'Migue\\ProyectoFinalTimetrack\\Database\\' => 38,
            'Migue\\ProyectoFinalTimetrack\\Controllers\\' => 41,
            'Migue\\ProyectoFinalTimetrack\\Config\\' => 36,
            'Migue\\ProyectoFinalTimetrack\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Migue\\ProyectoFinalTimetrack\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Migue\\ProyectoFinalTimetrack\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/helpers',
        ),
        'Migue\\ProyectoFinalTimetrack\\Entities\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/entities',
        ),
        'Migue\\ProyectoFinalTimetrack\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/database',
        ),
        'Migue\\ProyectoFinalTimetrack\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'Migue\\ProyectoFinalTimetrack\\Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/config',
        ),
        'Migue\\ProyectoFinalTimetrack\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe45a3a51f8d5c8406d2c1fda279b66a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe45a3a51f8d5c8406d2c1fda279b66a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe45a3a51f8d5c8406d2c1fda279b66a::$classMap;

        }, null, ClassLoader::class);
    }
}
