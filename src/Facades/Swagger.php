<?php
namespace Swagger\Facades;
use Illuminate\Support\Facades\Facade;
class Swagger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swagger';
    }
}