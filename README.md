# BaseApp

This package creates the tables and basic data of the departments and cities of Colombia.

## Installation

Use composer to install the package.

```
composer require mlopez/base-app
```

Optionally, publish the migrations files. The default migrations should work fine usually.

```
php artisan vendor:publish --tag=base-app-migrations
```

After composer installs the package, run the following command to run the package migrations and seeders.

```
php artisan base-app:install
```

## Credits

- [Miguel Lopez Ariza](https://github.com/parrotsoft)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.