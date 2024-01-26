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
            ['name' => 'Security'],
            ['name' => 'Solar Power'],
        ])->each(fn ($item) => Module::create($item));
    }
}
