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

    foreach ($modules as $module) {
        dump($module->name);

        foreach ($module->upgrades as $upgrade) {
            dump([
                'level' => $upgrade->level,
                'construction_time' => $upgrade->construction_time,
                'is_constructed' => $upgrade->is_constructed,
            ]);

            foreach ($upgrade->requirements as $requirement) {
                dump([
                    'name' => $requirement->requirementable->name,
                    'requirementable_type' => $requirement->requirementable_type,
                    'required_amount' => $requirement->required_amount,
                ]);
            }
        }

        echo '<hr />';
    }

    $requirements = Requirement::whereRelation('upgrade', 'is_constructed', '==', false)->get();

    dd($requirements->toArray());
});
