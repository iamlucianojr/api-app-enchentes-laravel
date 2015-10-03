<?php

namespace app;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Jenssegers\Mongodb\Model as Model;

class Event extends Model
{
    protected $collection = 'events';
    protected $fillable = ['title', 'description', 'latitude', 'longitude', 'type'];
    protected $guard = ['id'];

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->getAttribute('title');
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        if (empty($title)) {
            throw new InvalidArgumentException(printf('Title %s should not be empty', $title));
        }
        $this->setAttribute('title', $title);
    }
}
