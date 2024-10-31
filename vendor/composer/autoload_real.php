<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit11c64cca3f0f4c11b5aac4224f63ae39
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

        spl_autoload_register(array('ComposerAutoloaderInit11c64cca3f0f4c11b5aac4224f63ae39', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit11c64cca3f0f4c11b5aac4224f63ae39', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit11c64cca3f0f4c11b5aac4224f63ae39::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}