<?php

namespace Acme\Tests\Benchmark;

use Acme\WithoutException;

class WithoutExceptionBench
{
    public function benchBar()
    {
        $withException = new WithoutException();
        $withException->bar() !== null;
    }
}
