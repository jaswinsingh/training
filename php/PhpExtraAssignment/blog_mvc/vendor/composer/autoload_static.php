<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30816d8cf1caafba85824de12252b47f
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30816d8cf1caafba85824de12252b47f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30816d8cf1caafba85824de12252b47f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
