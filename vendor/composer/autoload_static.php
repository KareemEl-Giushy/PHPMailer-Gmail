<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3830cfa17a2860f84c65f4e201cf79c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3830cfa17a2860f84c65f4e201cf79c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3830cfa17a2860f84c65f4e201cf79c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}