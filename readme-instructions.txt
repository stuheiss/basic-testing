Setup 3 playgrounds:

1.  composer create-project --prefer-dist laravel/laravel laravel-playground

2.  mkdir codeception-playground
    (
        cd codeception-playground
        composer require codeception/codeception
        composer require mockery/mockery
        mkdir src
        # add autoload section to composer.json
        composer dump-autoload
    )

3.  mkdir phpunit-playground
    (
        cd phpunit-playground
        composer require phpunit/phpunit
        cp vendor/phpunit/phpunit/phpunit.xml . // get a basic config
        touch tests/bootstrap.php // create an empty bootstrap.php
        mkdir -p tests/Util
        # add autoload section to composer.json
        composer dump-autoload
    )

Autoload config in composer.json:
--snip--
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
--snip--

Minimal PHPUnit test:
--snip--
<?php
namespace App;

use PHPUnit\Framework\TestCase;

class FirstUnitTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(true);
    }
}
--snip--
