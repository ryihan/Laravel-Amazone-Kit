<?php namespace Aws\Laravel\Test;
use Aws\Laravel\AwsFacade as AWS;
use Aws\Laravel\AwsServiceProvider;
use Illuminate\Container\Container;
abstract class AwsServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function setupApplication();
    private function setupServiceProvider(Container $app)
    {
        $provider = new AwsServiceProvider($app);
        $app->register($provider);
        $provider->boot();
        return $provider;
    }
}
