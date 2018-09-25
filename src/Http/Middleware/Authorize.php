<?php

namespace Kristories\Novassport\Http\Middleware;

use Kristories\Novassport\Novassport;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(Novassport::class)->authorize($request) ? $next($request) : abort(403);
    }
}
