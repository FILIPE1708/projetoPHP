<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7878cf73c73d83236a62c9faae90684f
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7878cf73c73d83236a62c9faae90684f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7878cf73c73d83236a62c9faae90684f::$classMap;

        }, null, ClassLoader::class);
    }
}