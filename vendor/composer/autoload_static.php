<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< HEAD
class ComposerStaticInite61514c1e3471bf272eeafaaa70d106c
=======
<<<<<<< HEAD
class ComposerStaticInit6908510312e7a961b3afad3043d5a79c
=======
class ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24
>>>>>>> db2020/master
>>>>>>> DB2020/master
{
    public static $files = array (
        '9f2ca8d9a238e4c80d25576e2bfa4cb3' => __DIR__ . '/../..' . '/Modules/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'A' => 
        array (
<<<<<<< HEAD
            'APP\\' => 4,
=======
            'App\\' => 4,
>>>>>>> DB2020/master
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Modules',
        ),
<<<<<<< HEAD
        'APP\\' => 
=======
        'App\\' => 
>>>>>>> DB2020/master
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< HEAD
            $loader->prefixLengthsPsr4 = ComposerStaticInite61514c1e3471bf272eeafaaa70d106c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite61514c1e3471bf272eeafaaa70d106c::$prefixDirsPsr4;
=======
<<<<<<< HEAD
            $loader->prefixLengthsPsr4 = ComposerStaticInit6908510312e7a961b3afad3043d5a79c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6908510312e7a961b3afad3043d5a79c::$prefixDirsPsr4;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e1b3f9507652e32d6bfcc254a57df24::$prefixDirsPsr4;
>>>>>>> db2020/master
>>>>>>> DB2020/master

        }, null, ClassLoader::class);
    }
}
