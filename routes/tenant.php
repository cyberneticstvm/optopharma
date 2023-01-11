<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        //dd(App\Models\User::all());
        //return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
        return view('tenant.login');
    })->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});

Route::group([
    'middleware' => ['web', 'auth', InitializeTenancyByDomain::class, PreventAccessFromCentralDomains::class],
], function(){
    Route::get('/dash/', [AuthController::class, 'dash'])->name('dash');

    Route::get('/users/', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create/', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create/', [UserController::class, 'store'])->name('user.save');
    Route::get('/user/edit/{id}/', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}/', [UserController::class, 'update'])->name('users.update');
    Route::delete('/user/delete/{id}/', [UserController::class, 'destroy'])->name('users.delete');

    Route::get('/roles/', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create/', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/create/', [RoleController::class, 'store'])->name('roles.save');
    Route::get('/roles/edit/{id}/', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/edit/{id}/', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/delete/{id}/', [RoleController::class, 'destroy'])->name('roles.delete');

    Route::get('/logout/', [AuthController::class, 'logout'])->name('logout');
});
