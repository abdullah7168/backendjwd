<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/api/student/login',
        '/api/degree-verification',
        '/watch/degree-vf-reqs',
        '/watch/degree-vf-reply',
        'get-reply-for/',
        '/api/change/notify'
    ];
}
