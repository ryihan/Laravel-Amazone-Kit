<?php namespace Aws\Laravel\Test;
use Aws\Laravel\AwsFacade as AWS;
use Aws\Laravel\AwsServiceProvider;
use Illuminate\Container\Container;
abstract class AwsServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testServiceNameIsProvided()
    {
        $app = $this->setupApplication();
        $provider = $this->setupServiceProvider($app);
        $this->assertContains('aws', $provider->provides());
    }
    public function testVersionInformationIsProvidedToSdkUserAgent()
    {
        $app = $this->setupApplication();
        $this->setupServiceProvider($app);
        $config = $app['config']->get('aws');
        $this->assertArrayHasKey('ua_append', $config);
        $this->assertInternalType('array', $config['ua_append']);
        $this->assertNotEmpty($config['ua_append']);
        $this->assertNotEmpty(array_filter($config['ua_append'], function ($ua) {
            return false !== strpos($ua, AwsServiceProvider::VERSION);
        }));
    }
    abstract protected function setupApplication();
    private function setupServiceProvider(Container $app)
    {
        $provider = new AwsServiceProvider($app);
        $app->register($provider);
        $provider->boot();
        return $provider;
    }
}
