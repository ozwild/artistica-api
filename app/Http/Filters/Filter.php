<?php
declare(strict_types=1);

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use App\Http\Filters\Parameters\RequestParameters;

abstract class Filter
{
    public $requestParameters;
     
    public function __construct()
    {
        $this->requestParameters = new RequestParameters();
    }

    abstract public function applyTo(Builder $query) : Builder;
}
