<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f6d7df7534ca53ba94ee90c588412a3
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Reinjv\\03Composer\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Reinjv\\03Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f6d7df7534ca53ba94ee90c588412a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f6d7df7534ca53ba94ee90c588412a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f6d7df7534ca53ba94ee90c588412a3::$classMap;

        }, null, ClassLoader::class);
    }
}
