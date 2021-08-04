<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource(
//     'products', 
//     ProductsController::class
//   );
  
// Route::apiResource(
//     'products.comments', 
//     ProductCommentsController::class
//   );

//   Route::post('/register', function () {
//     $rules = [
//         'name' => 'required',
//         'email' => 'required|email|unique:users,email',
//         'username' => 'required|alpha_num',
//         'password' => 'required|min:6',
//         'age' => 'required|numeric|gt:17',
//     ];
//     return ('OK MASUK');
    
// });

Route::get('/contacts/{id}', function ($id) {
    return App\Models\Contact::find($id);
  });

Route::post('/contacts/store', [App\Http\Controllers\ContactController::class, 'store']);
Route::put('/contacts/update/{id}', [App\Http\Controllers\ContactController::class, 'update']);
Route::delete('/contacts/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy']);
  
  
  
  
  


  
  
  
  
  
  




