<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc055a9512cdae13fcf44f452ec6b4ba7
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc055a9512cdae13fcf44f452ec6b4ba7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc055a9512cdae13fcf44f452ec6b4ba7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc055a9512cdae13fcf44f452ec6b4ba7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc055a9512cdae13fcf44f452ec6b4ba7::$classMap;

        }, null, ClassLoader::class);
    }
}
