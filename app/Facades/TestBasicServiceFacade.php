<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use App\Services\TestBasicService;

class TestBasicServiceFacade  extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'service.vk_basic';
    }
}