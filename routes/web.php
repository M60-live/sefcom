<?php

use App\Http\Controllers\ContactController;
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

Route::view('/','index');

Route::view('/about-us','about-us');

Route::view('/services', 'services');

/* Contact-Us */
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

/* Mission */

Route::view('/core-environmental-and-water-resource-services', 'mission/core-environmental-and-water-resource-services');

Route::view('/environmental-data-science-and-analytics', 'mission/environmental-data-science-and-analytics');

Route::view('/power-bi-development-and-executive-dashboards', 'mission/power-bi-development-and-executive-dashboards');

Route::view('/machine-learning-applications-for-environmental-systems', 'mission/machine-learning-applications-for-environmental-systems');

Route::view('/artificial-intelligence-ai-for-environmental-governance', 'mission/artificial-intelligence-ai-for-environmental-governance');

Route::view('/digital-transformation', 'mission/digital-transformation');

/* SD */

Route::view('/feasibility-studies', 'sd/feasibility-studies');

Route::view('/hydrology', 'sd/hydrology');

Route::view('/hydrogeology', 'sd/hydrogeology');

Route::view('/soil-science', 'sd/soil-science');

Route::view('/geochemistry', 'sd/geochemistry');

Route::view('/environmental-assessment', 'sd/environmental-assessment');

Route::view('/hydropower', 'sd/hydropower');

Route::view('/infrastructure', 'sd/infrastructure');

Route::view('/energy', 'sd/energy');

Route::view('/geotechnical-services', 'sd/geotechnical-services');

Route::view('/geographical-information-systems', 'sd/geographical-information-systems');

Route::view('/laboratory-services', 'sd/laboratory-services');

Route::view('/gis-and-drone-survey', 'sd/gis-and-drone-survey');

Route::view('/integrated-data-science-and-ai-modelling', 'sd/integrated-data-science-and-ai-modelling');