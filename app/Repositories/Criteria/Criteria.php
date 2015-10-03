<?php

namespace app\Repositories\Criteria;

use App\Repositories\Contracts\RepositoryInterface;

abstract class Criteria
{
    /**
     * @param $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    abstract public function apply($model, RepositoryInterface $repository);
}
