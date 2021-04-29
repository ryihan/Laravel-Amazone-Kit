<?php
namespace Aws\Laravel\Test;
use Illuminate\Config\Repository;
use Laravel\Lumen\Application;
class LumenAwsServiceProviderTest extends AwsServiceProviderTest
{
    public function setUp()
    {
        if (!class_exists(Application::class)) {
            $this->markTestSkipped();
        }
        parent::setUp();
    }
    }
}
