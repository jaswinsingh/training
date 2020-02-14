<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2fe66ec7df370cbff2f24a439f0e0fea
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'player\\' => 7,
        ),
        'm' => 
        array (
            'match\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'player\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
        'match\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2fe66ec7df370cbff2f24a439f0e0fea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2fe66ec7df370cbff2f24a439f0e0fea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}