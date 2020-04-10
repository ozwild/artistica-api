<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class UserFilter extends Filter
{
    public function applyTo(Builder $query) : Builder
    {
        if ($this->requestParameters->has('onlyManagers')) {
            $query->onlyManagers();
        }

        if ($this->requestParameters->has('withScores')) {
            $query->withScores();
        }

        return $query;
    }
}
