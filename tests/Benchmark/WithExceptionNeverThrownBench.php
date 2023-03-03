<?php

namespace Acme\Tests\Benchmark;

use Acme\WithExceptionNeverThrown;
use Exception;

class WithExceptionNeverThrownBench
{
    public function benchBar()
    {
        $withException = new WithExceptionNeverThrown();
        try {
            $withException->bar();
        } catch (Exception $exception) {}
    }
}
