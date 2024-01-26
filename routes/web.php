<?php

use App\Models\Module;
use App\Models\Requirement;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tinker', function () {

    $modules = Module::get();

    $requirements = Requirement::whereRelation('upgrade', 'is_constructed', '==', false)->get();

    $groupedRequirements = $requirements->groupBy('requirementable_type');

    $requiredItems = $groupedRequirements
        ->get('App\Models\Item')
        ->groupBy('requirementable_id')
        ->map(function ($array) {
            $general = $array->first();

            return Requirement::make([
                'upgrade_id' => $general->upgrade_id,
                'requirementable_type' => $general->requirementable_type,
                'requirementable_id' => $general->requirementable_id,
                'required_amount' => $array->sum('required_amount'),
            ]);
        });

    return view('tinker', [
        'modules' => $modules,
        'allRequirements' => $requirements,
        'requiredItems' => $requiredItems,
    ]);
});
