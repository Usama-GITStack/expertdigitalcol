<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc46cc77a25a5550724fd4831576fd540
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc46cc77a25a5550724fd4831576fd540::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc46cc77a25a5550724fd4831576fd540::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
