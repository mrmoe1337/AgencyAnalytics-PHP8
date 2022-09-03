<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3af67fcab929641cef9f0d3c7fa20a71
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Agencyanalytics\\App\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Agencyanalytics\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3af67fcab929641cef9f0d3c7fa20a71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3af67fcab929641cef9f0d3c7fa20a71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3af67fcab929641cef9f0d3c7fa20a71::$classMap;

        }, null, ClassLoader::class);
    }
}