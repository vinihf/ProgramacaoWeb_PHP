<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec30f8a08c5094c29bf9641bc1ff7a62
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec30f8a08c5094c29bf9641bc1ff7a62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec30f8a08c5094c29bf9641bc1ff7a62::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec30f8a08c5094c29bf9641bc1ff7a62::$classMap;

        }, null, ClassLoader::class);
    }
}
