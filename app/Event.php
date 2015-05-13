<?php namespace App;

use Jenssegers\Mongodb\Model as Model;
class Event extends Model
{

	protected $collection = 'events';
    protected $fillable = ['title', 'description', 'latitude', 'longitude', 'type'];
    protected $guard = ['id'];

}
