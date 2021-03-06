<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde98e413886ccd336ae42914b6b8de2a
{
    public static $files = array (
        'fc73bab8d04e21bcdda37ca319c63800' => __DIR__ . '/..' . '/mikecao/flight/flight/autoload.php',
        '5b7d984aab5ae919d3362ad9588977eb' => __DIR__ . '/..' . '/mikecao/flight/flight/Flight.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'model\\' => 6,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitde98e413886ccd336ae42914b6b8de2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitde98e413886ccd336ae42914b6b8de2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
