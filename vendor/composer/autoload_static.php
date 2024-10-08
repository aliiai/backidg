<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit542caa110fb6b2d0a2627f0969204e27
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Itrax\\Backend\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Itrax\\Backend\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit542caa110fb6b2d0a2627f0969204e27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit542caa110fb6b2d0a2627f0969204e27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit542caa110fb6b2d0a2627f0969204e27::$classMap;

        }, null, ClassLoader::class);
    }
}
