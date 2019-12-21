<?php
declare(strict_types=1);

namespace Khuddus\Helpers\CamelCase\Tests;

require_once 'vendor/autoload.php';

use Khuddus\Helpers\CamelCase\StringHelper;
use PHPUnit\Framework\TestCase;

final class StringHelperTest extends TestCase
{
    public function testCanReturnCamelCasedString(): void
    {
        $this->assertEquals(
            "helloWorld",
            StringHelper::convertToCamelCasedString("Hello world")
        );
        $this->assertEquals(
            "helloWorld",
            StringHelper::convertToCamelCasedString("Hello-world")
        );
        $this->assertEquals(
            "helloWorld",
            StringHelper::convertToCamelCasedString("Hello_world")
        );
        $this->assertEquals(
            "helloWorld",
            StringHelper::convertToCamelCasedString("Hello   world")
        );
        $this->assertEquals(
            "helloWorldNamasthe",
            StringHelper::convertToCamelCasedString("Hello   world_Namasthe")
        );
    }
}
