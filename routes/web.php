<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get(uri: '/', action: function (): View {
    return view(view: 'welcome');
});
Route::apiResource(name: '/student', controller: StudentController::class);