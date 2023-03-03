<?php

namespace Acme;

use Exception;

class WithExceptionNeverThrown
{
    public function bar(): ?string {
        if (false) { throw new Exception(); }
        return '';
    }
}
