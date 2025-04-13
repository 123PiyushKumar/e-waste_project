<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita92cfff21f6434e23f7fcb1fb9f63b3a
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rajiv\\Project\\' => 14,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rajiv\\Project\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita92cfff21f6434e23f7fcb1fb9f63b3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita92cfff21f6434e23f7fcb1fb9f63b3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita92cfff21f6434e23f7fcb1fb9f63b3a::$classMap;

        }, null, ClassLoader::class);
    }
}
