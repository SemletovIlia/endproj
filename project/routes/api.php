<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/', function (Request $request) {
    $data = $request->validate([
        'login' => 'required',
        'password' => 'required'
    ]);
    $user = new User;
    $user->login = $request->login;
    $user->password = Hash::make($request->password);
    $user->save();
});

Route::post('/token', function (Request $request) {
    $data = $request->validate([
        'login' => 'required',
        'password' => 'required'
    ]);

    $user = User::where('login', $request->login)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
            'message' => ['These credentials do not match our records.']
        ], 404);
    }

    $admin = $user->login == "admin"; //!!!
    $token = $user->createToken($request->device_name, [$admin ? 'edit' : 'view'])->plainTextToken;

    $response = [
        'user' => $user,
        'token' => $token,
        'is_admin' => $admin,
    ];
    return $response;
});

Route::middleware('auth:sanctum')->get('/check-user', function () {
    return true;
});

Route::middleware(['auth:sanctum', 'ability:edit'])->get('/check-admin', function () {
    return true;
});