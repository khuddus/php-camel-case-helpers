<?php
declare(strict_types=1);

namespace Khuddus\Helpers\CamelCase\Tests;

require_once 'vendor/autoload.php';

use Khuddus\Helpers\CamelCase\ArrayHelper;
use PHPUnit\Framework\TestCase;

final class ArrayHelperTest extends TestCase
{
    public function testCanReturnCamelCasedArrayWithoutLevel(): void
    {
        $this->assertEquals(
            [],
            ArrayHelper::convertToCamelCasedArray([])
        );
        $this->assertEquals(
            ['hello world'],
            ArrayHelper::convertToCamelCasedArray(['hello world'])
        );
        $this->assertEquals(
            ['helloWorld'=>1],
            ArrayHelper::convertToCamelCasedArray([
                'hello world'=>1
                ])
        );
        $this->assertEquals(
            ['Hello World'=>[
                'My----World'=>'this world'
                ]
            ],
            ArrayHelper::convertToCamelCasedArray(
                [
                'Hello World'=>[
                    'My----World'=>'this world'
                    ]
                ],
                0
            )
        );
        $this->assertEquals(
            [
                'helloWorld'=>[
                    'myWorld'=>'this world'
                    ]
                ],
            ArrayHelper::convertToCamelCasedArray(['Hello World'=>['My----World'=>'this world']], 100)
        );
        $this->assertEquals(
            [
                'helloWorld'=>[
                    'myWorld'=>'this world'
                ],
                [
                'anotherWOrld'=>[
                    'busy_World'=>[
                    'instruMental World'=>[
                        'courageous--World'=>'mine'
                            ]
                        ]
                    ]
                ]
            ],
            ArrayHelper::convertToCamelCasedArray(
                [
                'Hello World'=>[
                    'My----World'=>'this world'
                ],
                [
                'another -_-_WOrld'=>[
                    'busy_World'=>[
                        'instruMental World'=>[
                            'courageous--World'=>'mine'
                            ]
                        ]
                    ]
                ]
                ],
                2
            )
        );
        $this->assertEquals(
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
            ],
            ArrayHelper::convertToCamelCasedArray(
                [
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
                3
            )
        );
        $this->assertEquals(
            [
                'helloWorld'=>[
                    'myWorld'=>'this world'
                ],
                [
                'anotherWOrld'=>[
                    'busyWorld'=>[
                        'instruMentalWorld'=>[
                            'courageousWorld'=>'mine'
                            ]
                        ]
                    ]
                ]
            ],
            ArrayHelper::convertToCamelCasedArray(
                [
                'Hello World'=>[
                    'My----World'=>'this world'
                ],
                [
                'another -_-_WOrld'=>[
                    'busy_World'=>[
                        'instruMental World'=>[
                            'courageous--World'=>'mine'
                            ]
                        ]
                    ]
                ]
                ],
                10
            )
        );
    }
}
