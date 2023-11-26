<?php

use App\Http\Controllers\about_meController;
use App\Http\Controllers\dashboard_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return redirect("/");
// });

route::get("/",[dashboard_controller::class,"home"])->name("home");
route::get("/aboutMe",[about_meController::class,"aboutMe"])->name("aboutMe");
route::get("/project",[dashboard_controller::class,"project"])->name("project");
route::get("/contact",[dashboard_controller::class,"contact"])->name("contact");
