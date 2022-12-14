<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitec30f8a08c5094c29bf9641bc1ff7a62
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

        spl_autoload_register(array('ComposerAutoloaderInitec30f8a08c5094c29bf9641bc1ff7a62', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitec30f8a08c5094c29bf9641bc1ff7a62', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitec30f8a08c5094c29bf9641bc1ff7a62::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
