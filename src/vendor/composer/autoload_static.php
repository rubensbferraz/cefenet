<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a5ad57699b9b65245a832a37b0ad6cf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'P' => 
        array (
            'Public\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Public\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../public',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a5ad57699b9b65245a832a37b0ad6cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a5ad57699b9b65245a832a37b0ad6cf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
