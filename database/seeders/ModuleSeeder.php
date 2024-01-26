<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Air Filtering Unit'],
            ['name' => 'Bitcoin Farm'],
            ['name' => 'Booze Generator'],
            ['name' => 'Defective Wall'],
            ['name' => 'Generator'],
            ['name' => 'Gym'],
            ['name' => 'Hall of Fame'],
            ['name' => 'Heating'],
            ['name' => 'Illumination'],
            ['name' => 'Intelligence Center'],
            ['name' => 'Lavatory'],
            ['name' => 'Library'],
            ['name' => 'Medstation'],
            ['name' => 'Nutrition Unit'],
            ['name' => 'Rest Space'],
            ['name' => 'Scav Case'],
            ['name' => 'Security'],
            ['name' => 'Shooting Range'],
            ['name' => 'Solar Power'],
            ['name' => 'Stash'],
            ['name' => 'Vents'],
            ['name' => 'Water Collector'],
            ['name' => 'Weapon Rack'],
            ['name' => 'Workbench'],
            ['name' => 'Christmas Tree'],
        ])->each(fn ($item) => Module::create($item));
    }
}
