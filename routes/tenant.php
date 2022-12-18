<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

/*Route::middleware([
    'web', 'auth',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        //dd(App\Models\User::all());
        //return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
        return view('tenant.login');
    })->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});*/
Route::middleware([
    'web', 'auth',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('tenant.login');
    })->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login');
    Route::get('vijo.w3elements.net/dash/', [AuthController::class, 'dash'])->name('dash');
    Route::get('/logout/', [AuthController::class, 'logout'])->name('logout');
});
