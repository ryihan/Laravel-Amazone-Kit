<?php namespace Aws\Laravel;
use Aws\AwsClientInterface;
use Illuminate\Support\Facades\Facade;
class AwsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aws';
    }
}
