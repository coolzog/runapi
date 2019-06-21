<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit440ca17c0583777c4e5a232406bf1b38
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'c' => 
        array (
            'command\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'command\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/command',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit440ca17c0583777c4e5a232406bf1b38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit440ca17c0583777c4e5a232406bf1b38::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
