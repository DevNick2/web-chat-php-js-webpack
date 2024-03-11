<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f0f08fa5e8f866f8db5b021fac2bb47
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'Chat\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Chat\\' => 
        array (
            0 => __DIR__ . '/..' . '/Chat',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f0f08fa5e8f866f8db5b021fac2bb47::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f0f08fa5e8f866f8db5b021fac2bb47::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
