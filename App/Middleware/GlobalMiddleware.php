<?php

namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;

class GlobalMiddleware implements MiddlewareInterface
{
    public function handle()
    {
        $this->sanitizeGetParams();
    }


    private function sanitizeGetParams()
    {
        foreach ($_GET as $key => $value) {
            $_GET[$key] = xss_clean($value);
        }
    }

}
