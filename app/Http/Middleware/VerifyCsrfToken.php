<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        // 'payu-payment-form',
        // 'payu/success',
        // 'payu/failure',
        // 'payu/response/*'
        'payu/response',
        '/membership/payment/response'

    ];
    
    
}
