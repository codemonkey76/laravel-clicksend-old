<?php

namespace Codemonkey76\ClickSend;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClickSendRequestValidator
{
    public function handle(Request $request, Closure $next)
    {
        $isValid = true;

        if ($isValid) {
            return $next($request);
        } else {
            return new Response('You are not ClickSend :(', 403);
        }
    }
}
