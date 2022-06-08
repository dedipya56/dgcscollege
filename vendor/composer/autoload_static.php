<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1fb4d673a3efe6f2ad4f3eb5fabaa64
{
    public static $files = array (
        '65966401fe9011225a1878c3ea034262' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Utilities.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Instamojo\\Exceptions\\' => 21,
            'Instamojo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Instamojo\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions',
        ),
        'Instamojo\\' => 
        array (
            0 => __DIR__ . '/..' . '/instamojo/instamojo-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Instamojo\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/InvalidRequestException.php',
        'Instamojo\\Exceptions\\ActionForbiddenException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/ActionForbiddenException.php',
        'Instamojo\\Exceptions\\ApiException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/ApiException.php',
        'Instamojo\\Exceptions\\AuthenticationException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/AuthenticationException.php',
        'Instamojo\\Exceptions\\InstamojoException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/InstamojoException.php',
        'Instamojo\\Exceptions\\MissingParameterException' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Exceptions/MissingParameterException.php',
        'Instamojo\\Instamojo' => __DIR__ . '/..' . '/instamojo/instamojo-php/src/Instamojo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1fb4d673a3efe6f2ad4f3eb5fabaa64::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1fb4d673a3efe6f2ad4f3eb5fabaa64::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1fb4d673a3efe6f2ad4f3eb5fabaa64::$classMap;

        }, null, ClassLoader::class);
    }
}
