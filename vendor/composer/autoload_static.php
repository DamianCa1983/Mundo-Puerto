<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84ae4bbf93bfe9aab895a0f3a92d8a3a
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84ae4bbf93bfe9aab895a0f3a92d8a3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84ae4bbf93bfe9aab895a0f3a92d8a3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84ae4bbf93bfe9aab895a0f3a92d8a3a::$classMap;

        }, null, ClassLoader::class);
    }
}
