<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1358a865ab5286eece9831de2f91c94a
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
            'Laravel\\SerializableClosure\\' => 28,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
        'A' => 
        array (
            'Aura\\SqlQuery\\' => 14,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Laravel\\SerializableClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/serializable-closure/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
        'Aura\\SqlQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sqlquery/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Config' => __DIR__ . '/../..' . '/config/Config.php',
        'App\\Contracts\\BaseInterface' => __DIR__ . '/../..' . '/src/Contracts/BaseInterface.php',
        'App\\Contracts\\DatabaseInterface' => __DIR__ . '/../..' . '/src/Contracts/DatabaseInterface.php',
        'App\\DTO\\BookingDTO' => __DIR__ . '/../..' . '/src/DTO/BookingDTO.php',
        'App\\Database\\DatabaseCore' => __DIR__ . '/../..' . '/src/Database/DatabaseCore.php',
        'App\\Database\\MySQLDatabase' => __DIR__ . '/../..' . '/src/Database/MySQLDatabase.php',
        'App\\Entities\\Amenity' => __DIR__ . '/../..' . '/src/Entities/Amenity.php',
        'App\\Entities\\BookingStatus' => __DIR__ . '/../..' . '/src/Entities/BookingStatus.php',
        'App\\Entities\\Core\\EntityCore' => __DIR__ . '/../..' . '/src/Entities/Core/EntityCore.php',
        'App\\Entities\\Discount' => __DIR__ . '/../..' . '/src/Entities/Discount.php',
        'App\\Entities\\Hotel' => __DIR__ . '/../..' . '/src/Entities/Hotel.php',
        'App\\Entities\\Image' => __DIR__ . '/../..' . '/src/Entities/Image.php',
        'App\\Entities\\Location' => __DIR__ . '/../..' . '/src/Entities/Location.php',
        'App\\Entities\\PaymentGateway' => __DIR__ . '/../..' . '/src/Entities/PaymentGateway.php',
        'App\\Entities\\Reservation' => __DIR__ . '/../..' . '/src/Entities/Reservation.php',
        'App\\Entities\\Review' => __DIR__ . '/../..' . '/src/Entities/Review.php',
        'App\\Entities\\Room' => __DIR__ . '/../..' . '/src/Entities/Room.php',
        'App\\Entities\\RoomType' => __DIR__ . '/../..' . '/src/Entities/RoomType.php',
        'App\\Entities\\User' => __DIR__ . '/../..' . '/src/Entities/User.php',
        'App\\Http\\Controllers\\HotelController' => __DIR__ . '/../..' . '/src/Http/Controllers/HotelController.php',
        'App\\Repositories\\HotelRepository' => __DIR__ . '/../..' . '/src/Repositories/HotelRepository.php',
        'App\\Repositories\\Interfaces\\HotelRepositoryInterface' => __DIR__ . '/../..' . '/src/Repositories/Interfaces/HotelRepositoryInterface.php',
        'App\\Repositories\\Interfaces\\UserRepositoryInterface' => __DIR__ . '/../..' . '/src/Repositories/Interfaces/UserRepositoryInterface.php',
        'App\\Repositories\\UserRepository' => __DIR__ . '/../..' . '/src/Repositories/UserRepository.php',
        'App\\Services\\HotelService' => __DIR__ . '/../..' . '/src/Services/HotelService.php',
        'App\\Services\\ServiceCore' => __DIR__ . '/../..' . '/src/Services/ServiceCore.php',
        'App\\Services\\UserService' => __DIR__ . '/../..' . '/src/Services/UserService.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1358a865ab5286eece9831de2f91c94a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1358a865ab5286eece9831de2f91c94a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1358a865ab5286eece9831de2f91c94a::$classMap;

        }, null, ClassLoader::class);
    }
}
