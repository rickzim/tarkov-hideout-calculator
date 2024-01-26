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
        collect([
            [
                'module_id' => Module::whereName('Security')->first()->id,
                'level' => 1,
                'construction_time' => '1h',
                'is_constructed' => false,
            ],
            [
                'module_id' => Module::whereName('Security')->first()->id,
                'level' => 2,
                'construction_time' => '4h',
                'is_constructed' => false,
            ],
            [
                'module_id' => Module::whereName('Solar Power')->first()->id,
                'level' => 1,
                'construction_time' => '1h',
                'is_constructed' => false,
            ],
            [
                'module_id' => Module::whereName('Solar Power')->first()->id,
                'level' => 2,
                'construction_time' => '4h',
                'is_constructed' => false,
            ],
        ])->each(fn ($item) => Upgrade::create($item));
    }
}
