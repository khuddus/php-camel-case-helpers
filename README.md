# php camel case helpers

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]


A php library provides camel case helpers. You can use array helper, to convert an array to camelCase keyed array, or you can use string helper to convert a string to camel case.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/        
build/
docs/
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require khuddus/php-camel-case-helpers
```

## Usage

``` php
use Khuddus\Helpers\CamelCase\ArrayHelper;
use Khuddus\Helpers\CamelCase\StringHelper;

echo StringHelper::convertToCamelCasedString("Hello world"); //echoes helloWorld
$convertedArray = ArrayHelper::convertToCamelCasedArray(['hello world'=>1]); //converts to ['helloWorld'=>1]
$convertedArray = ArrayHelper::convertToCamelCasedArray(['hello world'=>1]); //converts to ['helloWorld'=>1]
ArrayHelper::convertToCamelCasedArray([
                'Hello World'=>[
                    'My----World'=>'this world'
                ],
                [
                'another -_-_WOrld'=>[
                    'Busy_World'=>[
                        'instruMental World'=>[
                            'courageous--World'=>'mine'
                            ]
                        ]
                    ]
                ]
            ], 
            3);
/* converts it to 
            [
                'helloWorld'=>[
                    'myWorld'=>'this world'
                ],
                [
                'anotherWOrld'=>[
                    'busyWorld'=>[
                        'instruMental World'=>[
                            'courageous--World'=>'mine'
                            ]
                        ]
                    ]
                ]
            ]
*/
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

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
[ico-travis]: https://img.shields.io/travis/khuddus/php-camel-case-helpers/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/khuddus/php-camel-case-helpers.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/khuddus/php-camel-case-helpers
[link-travis]: https://travis-ci.org/khuddus/php-camel-case-helpers
[link-downloads]: https://packagist.org/packages/khuddus/php-camel-case-helpers
[link-author]: https://github.com/khuddus
[link-contributors]: ../../contributors
