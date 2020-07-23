<?php


namespace fazaa13\MidtransWrapper;


use Illuminate\Support\Facades\Facade;

class MidtransWrapperFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'midtrans.wrapper';
    }
}