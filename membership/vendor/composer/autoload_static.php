<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32a77a91db2c5dac02001548eb14dbca
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32a77a91db2c5dac02001548eb14dbca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32a77a91db2c5dac02001548eb14dbca::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
