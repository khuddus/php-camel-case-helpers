# php camel case helpers

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-ci]][link-ci]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP library that provides camel case helpers. Convert array keys or strings containing underscores, hyphens, or spaces into camelCase.

## Requirements

- PHP >= 8.1

## Install

``` bash
composer require khuddus/php-camel-case-helpers
```

## Usage

### String Helper

Converts a string to camelCase.

``` php
use Khuddus\Helpers\CamelCase\StringHelper;

StringHelper::convertToCamelCasedString("Hello world");       // helloWorld
StringHelper::convertToCamelCasedString("Hello-world");       // helloWorld
StringHelper::convertToCamelCasedString("Hello_world");       // helloWorld
StringHelper::convertToCamelCasedString("hello_beautiful_world"); // helloBeautifulWorld
```

### Array Helper

Recursively converts all non-numeric array keys to camelCase.

``` php
use Khuddus\Helpers\CamelCase\ArrayHelper;

// Convert all levels (default)
ArrayHelper::convertToCamelCasedArray(['hello_world' => 1]);
// ['helloWorld' => 1]

// Limit conversion depth with the optional $level parameter
// $level = 0  → no conversion
// $level = 1  → top-level keys only
// $level = null (default) → all levels

ArrayHelper::convertToCamelCasedArray([
    'Hello World' => [
        'My----World' => 'this world',
    ],
    [
        'another -_-_WOrld' => [
            'Busy_World' => [
                'instruMental World' => [
                    'courageous--World' => 'mine',
                ],
            ],
        ],
    ],
], 3);

/*
[
    'helloWorld' => [
        'myWorld' => 'this world',
    ],
    [
        'anotherWOrld' => [
            'busyWorld' => [
                'instruMental World' => [   // level 3 — not converted
                    'courageous--World' => 'mine',
                ],
            ],
        ],
    ],
]
*/
```

## Testing

``` bash
composer test
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email khuddus1+github@gmail.com instead of using the issue tracker.

## Credits

- [Abdul Khuddus][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/khuddus/php-camel-case-helpers.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-ci]: https://img.shields.io/github/actions/workflow/status/khuddus/php-camel-case-helpers/ci.yml?branch=master&style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/khuddus/php-camel-case-helpers.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/khuddus/php-camel-case-helpers
[link-ci]: https://github.com/khuddus/php-camel-case-helpers/actions/workflows/ci.yml
[link-downloads]: https://packagist.org/packages/khuddus/php-camel-case-helpers
[link-author]: https://github.com/khuddus
[link-contributors]: ../../contributors
