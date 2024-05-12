<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd3a9939fbfb2cc30c003bd4cc720da2d
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd3a9939fbfb2cc30c003bd4cc720da2d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd3a9939fbfb2cc30c003bd4cc720da2d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd3a9939fbfb2cc30c003bd4cc720da2d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
