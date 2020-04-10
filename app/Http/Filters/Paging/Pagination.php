<?php

namespace App\Http\Filters\Paging;

use Illuminate\Database\Eloquent\Builder;

class Pagination
{
    public PageFilter $filter;

    public function __construct()
    {
        $this->filter = new PageFilter();
    }

    public function apply(Builder $query)
    {
        $this->filter->applyTo($query);
        
        return $query->paginate($this->filter->pageSize);
    }
}
