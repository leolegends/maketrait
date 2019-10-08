# maketrait

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require leolegends/maketrait "2.0"
```

If you do not run Laravel 5.5 (or higher), then add the service provider in `config/app.php`:

```php
leolegends\maketrait\maketraitServiceProvider::class,
```

## Usage

``` bash
$ php artisan make:trait TestTrait
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email lviniciusribeiro@yahoo.com.br instead of using the issue tracker.

## Credits

- [Leonardo Ribeiro][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/leolegends/maketrait.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/leolegends/maketrait.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/leolegends/maketrait/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/leolegends/maketrait
[link-downloads]: https://packagist.org/packages/leolegends/maketrait
[link-travis]: https://travis-ci.org/leolegends/maketrait
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/leolegends
[link-contributors]: ../../contributors
