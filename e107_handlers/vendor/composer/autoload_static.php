<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ce406ae486ac58c9aa71537459207ae
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'I' => 
        array (
            'Ifsnop\\' => 7,
        ),
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Ifsnop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ifsnop/mysqldump-php/src/Ifsnop',
        ),
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ce406ae486ac58c9aa71537459207ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ce406ae486ac58c9aa71537459207ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ce406ae486ac58c9aa71537459207ae::$classMap;

        }, null, ClassLoader::class);
    }
}
