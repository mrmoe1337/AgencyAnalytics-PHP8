<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd34861855ddd4b08eae1744f9f514a2a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'AgencyAnalytics\\App\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AgencyAnalytics\\App\\' =>
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd34861855ddd4b08eae1744f9f514a2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd34861855ddd4b08eae1744f9f514a2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd34861855ddd4b08eae1744f9f514a2a::$classMap;

        }, null, ClassLoader::class);
    }
}
