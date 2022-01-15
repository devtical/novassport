<?php

namespace Devtical\Novassport\Http\Middleware;

use Devtical\Novassport\Novassport;

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
