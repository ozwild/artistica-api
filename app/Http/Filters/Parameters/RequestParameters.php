<?php
declare(strict_types=1);

namespace App\Http\Filters\Parameters;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class RequestParameters
{
    public $parameters;

    public function __construct()
    {
        $this->parameters = collect(request()->all());
    }

    public function has(string $key) : bool
    {
        return $this->parameters->has($key);
    }

    public function get(string $key):string
    {
        return $this->parameters->get($key);
    }
}
