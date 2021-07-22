# Laravel wrapper for the clicksend/clicksend-php SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codemonkey76/laravel-clicksend.svg?style=flat-square)](https://packagist.org/packages/codemonkey76/laravel-clicksend)
[![Total Downloads](https://img.shields.io/packagist/dt/codemonkey76/laravel-clicksend.svg?style=flat-square)](https://packagist.org/packages/codemonkey76/laravel-clicksend)
![GitHub Actions](https://github.com/codemonkey76/laravel-clicksend/actions/workflows/main.yml/badge.svg)

This is a basic wrapper for the clicksend/clicksend-php SDK.

## Installation

You can install the package via composer:

```bash
composer require codemonkey76/laravel-clicksend
```

## Usage

```php
ClickSend::make()->to('recipient number')->from('sender number')->message('Your message goes here!');
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email shane@alphasg.com.au instead of using the issue tracker.

## Credits

-   [Shane Poppleton](https://github.com/codemonkey76)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.