<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f55dd0c89fae80904d9108a18b44af8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f55dd0c89fae80904d9108a18b44af8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f55dd0c89fae80904d9108a18b44af8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
