<?php

namespace App\Traits;

trait Loggable
{
    public function log(string $message)
    {
        echo "Log: $message\n";
    }
}
