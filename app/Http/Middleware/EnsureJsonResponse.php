<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class EnsureJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // jika permintaan adalah untuk rute API dan respons bukan dalam format JSON,
        // maka ubah respons menjadi JsonResponse.
        if ($request->is('api/*') && !$response instanceof JsonResponse) {
            return new JsonResponse($response->getContent(), $response->getStatusCode(), $response->headers->all(), JSON_UNESCAPED_UNICODE);
        }

        return $response;
    }
}
