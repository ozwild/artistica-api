<?php
declare(strict_types=1);

namespace App\Http\Filters\Paging;

use App\Http\Filters\Parameters\RequestParameters;
use App\User;
use Illuminate\Contracts\Pagination\Paginator;
use \Illuminate\Database\Eloquent\Builder;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class PageFilter
{
    public $currentPage = 1;
    public $pageSize = 25;
    public $needle = null;
    public $sortBy = 'id';
    public $sortDirection = 'asc';

    public $validDirections = ['asc','desc'];
    public $validFields = null;

    public function __construct()
    {
        $this->getParameters();
    }

    private function getParameters()
    {
        $requestParameters = new RequestParameters();
        if ($requestParameters->has('page')) {
            $this->currentPage = $requestParameters->get('page');
        }
        if ($requestParameters->has('pageSize')) {
            $this->pageSize = (int) $requestParameters->get('pageSize');
        }
        if ($requestParameters->has('search')) {
            $this->needle = $requestParameters->get('search');
        }
        if ($requestParameters->has('orderBy')) {
            $this->sortBy = $requestParameters->get('orderBy');
        }
        if ($requestParameters->has('direction')) {
            $direction = $requestParameters->get('direction');
            if (!in_array($direction, $this->validDirections)) {
                throw new BadRequestHttpException("Invalid direction requested");
            }
            $this->sortDirection = $direction;
        }
    }

    public function applyTo(Builder $query) : Paginator
    {
        if ($this->needle) {
            $query->search($this->needle);
        }

        $query->orderBy($this->sortBy, $this->sortDirection);

        return $query->paginate($this->pageSize);
    }
}
