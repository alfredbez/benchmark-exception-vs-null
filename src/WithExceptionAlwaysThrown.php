<?php

namespace Acme;

use Exception;

class WithExceptionAlwaysThrown
{
    public function bar(): ?string {
        throw new Exception();
    }
}
