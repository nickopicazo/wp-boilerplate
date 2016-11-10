<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad9e3f203a2422f7aac0887c2abb1e1b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad9e3f203a2422f7aac0887c2abb1e1b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad9e3f203a2422f7aac0887c2abb1e1b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
