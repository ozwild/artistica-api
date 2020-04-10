<?php
declare(strict_types=1);

namespace App\Http\Filters\Parameters;

class PageParameters
{
    public int $currentPage = 1;
    public int $pageSize = 25;
    public string $needle = '';
    
    public function __construct()
    {
        $requestParameters = new RequestParameters();
        if ($requestParameters->has('page')) {
            $this->currentPage = $requestParameters->get('page');
        }
        if ($requestParameters->has('pageSize')) {
            $this->pageSize = $requestParameters->get('pageSize');
        }
        if ($requestParameters->has('search')) {
            $this->needle = $this->requestParameters->get('search');
        }
    }
}
