<?php

namespace app\Repositories;

use App\Repositories\Mongo\Repository;

class EventRepository extends Repository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return 'App\Event';
    }
}
