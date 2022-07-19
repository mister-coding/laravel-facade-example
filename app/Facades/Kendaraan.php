<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Kendaraan extends Facade
{

    public static function getFacadeAccessor(){
        return 'kendaraan';
    }

}
