<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit591f4709549d78425116731e6b451ced
{
    public static $files = array (
        'bf9f5270ae66ac6fa0290b4bf47867b7' => __DIR__ . '/..' . '/adodb/adodb-php/adodb.inc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SRC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SRC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit591f4709549d78425116731e6b451ced::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit591f4709549d78425116731e6b451ced::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
