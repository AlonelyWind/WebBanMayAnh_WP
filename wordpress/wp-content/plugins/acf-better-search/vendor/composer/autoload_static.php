<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7a93f383d053055f94784fe9bd17522
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AcfBetterSearch\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AcfBetterSearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7a93f383d053055f94784fe9bd17522::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7a93f383d053055f94784fe9bd17522::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
