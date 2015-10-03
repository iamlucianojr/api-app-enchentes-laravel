<?php

namespace app;

use Jenssegers\Mongodb\Model as Model;

class Quota extends Model
{
    protected $collection = 'quota';
    protected $fillable = ['endereço', 'abrigo', 'cota', 'lat', 'lng'];
    protected $guard = ['id'];
}
