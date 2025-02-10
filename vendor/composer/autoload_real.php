<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe45a3a51f8d5c8406d2c1fda279b66a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitfe45a3a51f8d5c8406d2c1fda279b66a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe45a3a51f8d5c8406d2c1fda279b66a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe45a3a51f8d5c8406d2c1fda279b66a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
