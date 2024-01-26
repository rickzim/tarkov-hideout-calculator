<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Upgrade;
use Illuminate\Database\Seeder;

class UpgradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::whereName('Air Filtering Unit')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '48 Hours']
        ]);

        Module::whereName('Bitcoin Farm')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '34 Hours'],
            ['level' => 2, 'construction_time' => '50 Hours'],
            ['level' => 3, 'construction_time' => '106 Hours'],
        ]);

        Module::whereName('Booze Generator')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '48 Hours'],
        ]);

        Module::whereName('Defective Wall')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '12 Hours'],
            ['level' => 3, 'construction_time' => '24 Hours'],
            ['level' => 4, 'construction_time' => '3 Hours'],
            ['level' => 5, 'construction_time' => '3 Hours'],
            ['level' => 6, 'construction_time' => '12 Hours'],
        ]);

        Module::whereName('Generator')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '5 Hours'],
            ['level' => 3, 'construction_time' => '16 Hours'],
        ]);

        Module::whereName('Gym')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '4 Hours'],
        ]);

        Module::whereName('Hall of Fame')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '12 Hours'],
            ['level' => 2, 'construction_time' => '18 Hours'],
            ['level' => 3, 'construction_time' => '24 Hours'],
        ]);

        Module::whereName('Heating')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours',],
            ['level' => 2, 'construction_time' => '2 Hours',],
            ['level' => 3, 'construction_time' => '8 Hours',],
        ]);

        Module::whereName('Illumination')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '0 Hours'],
            ['level' => 3, 'construction_time' => '6 Hours'],
        ]);

        Module::whereName('Intelligence Center')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '6 Hours'],
            ['level' => 3, 'construction_time' => '24 Hours'],
        ]);

        Module::whereName('Lavatory')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '3 Hours'],
            ['level' => 3, 'construction_time' => '7 Hours'],
        ]);

        Module::whereName('Library')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '54 Hours'],
        ]);

        Module::whereName('Medstation')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '3 Hours'],
            ['level' => 3, 'construction_time' => '12 Hours'],
        ]);

        Module::whereName('Nutrition Unit')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '4 Hours'],
            ['level' => 3, 'construction_time' => '14 Hours'],
        ]);

        Module::whereName('Rest Space')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '2 Hours'],
            ['level' => 3, 'construction_time' => '10 Hours'],
        ]);

        Module::whereName('Scav Case')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '80 Hours'],
        ]);

        Module::whereName('Security')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '3 Hours'],
            ['level' => 3, 'construction_time' => '17 Hours'],
        ]);

        Module::whereName('Shooting Range')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '1 Hours'],
            ['level' => 2, 'construction_time' => '24 Hours'],
            ['level' => 3, 'construction_time' => '24 Hours'],
        ]);

        Module::whereName('Solar Power')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '72 Hours'],
        ]);

        Module::whereName('Stash')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours', 'is_constructed' => true],
            ['level' => 2, 'construction_time' => '24 Hours'],
            ['level' => 3, 'construction_time' => '48 Hours'],
            ['level' => 4, 'construction_time' => '96 Hours'],
        ]);

        Module::whereName('Vents')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '3 Hours'],
            ['level' => 3, 'construction_time' => '10 Hours'],
        ]);

        Module::whereName('Water Collector')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '2 Hours'],
            ['level' => 2, 'construction_time' => '8 Hours'],
            ['level' => 3, 'construction_time' => '16 Hours'],
        ]);

        Module::whereName('Weapon Rack')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '12 Hours'],
            ['level' => 2, 'construction_time' => '18 Hours'],
            ['level' => 3, 'construction_time' => '24 Hours'],
        ]);

        Module::whereName('Workbench')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
            ['level' => 2, 'construction_time' => '3 Hours'],
            ['level' => 3, 'construction_time' => '11 Hours'],
        ]);

        Module::whereName('Christmas Tree')->first()->upgrades()->createMany([
            ['level' => 1, 'construction_time' => '0 Hours'],
        ]);
    }
}
