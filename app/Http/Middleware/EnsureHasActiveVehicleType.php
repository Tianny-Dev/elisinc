<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureHasActiveVehicleType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user && $user->user_type_id === 2) {
            $franchise = $user->ownerDetails?->franchises()->first();

            $hasActive = $franchise ? $franchise->vehicleTypes()
                ->where('status_id', 1)
                ->exists() : false;

            if (!$hasActive) {
                return redirect()->route('owner.dashboard')
                    ->with('error', 'Please wait for admin approval of your vehicle types to access this feature.');
            }
        }

        return $next($request);
    }
}
