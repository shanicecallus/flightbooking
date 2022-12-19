<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f89d2679d58f07b1edaed5931493ca4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f89d2679d58f07b1edaed5931493ca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f89d2679d58f07b1edaed5931493ca4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f89d2679d58f07b1edaed5931493ca4::$classMap;

        }, null, ClassLoader::class);
    }
}
