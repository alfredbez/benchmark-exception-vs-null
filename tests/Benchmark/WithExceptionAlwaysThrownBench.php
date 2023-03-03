<?php

namespace Acme\Tests\Benchmark;

use Acme\WithExceptionAlwaysThrown;
use Exception;

class WithExceptionAlwaysThrownBench
{
    public function benchBar()
    {
        $withException = new WithExceptionAlwaysThrown();
        try {
            $withException->bar();
        } catch (Exception $exception) {}
    }
}
