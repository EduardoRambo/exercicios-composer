<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbbde501fc194ae883bf4277ef378e2c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Model\\Game' => __DIR__ . '/../..' . '/App/Src/Model/game.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbbbde501fc194ae883bf4277ef378e2c::$classMap;

        }, null, ClassLoader::class);
    }
}